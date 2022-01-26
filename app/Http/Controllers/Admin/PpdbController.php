<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePpdbRequest;
use App\Models\Ppdb;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App;
use Illuminate\Support\Facades\DB;

class PpdbController extends Controller
{
    public function index(Request $request)
    {
        $registrars = Ppdb::when($request->search, function($query, $search) {
                    return $query->where('name', 'LIKE', '%'.$search.'%')
                        ->orWhere('nisn', 'LIKE', '%'.$search.'%')
                        ->orWhere('nik', 'LIKE', '%'.$search.'%');
                })
                ->orderBy('created_at', 'desc')
                ->paginate(25);

        return Inertia::render('Admin/PPDB/Index', [
            'registrars' => $registrars
        ]);
    }

    public function store(StorePpdbRequest $request)
    {
        Ppdb::create($request->validated());

        return back()->with([
            'message' => 'Data Tersimpan',
        ]);
    }


    public function show($id)
    {
        $registrar = Ppdb::findOrFail($id);

        return Inertia::render('Admin/PPDB/Detail', [
            'registrar' => $registrar,
        ]);
    }


    public function edit($id)
    {
        $registrar = Ppdb::findOrFail($id)->toArray();

        $registrar['date_of_birth'] = date('Y-m-d', strtotime($registrar['date_of_birth']));
        $registrar['father_date_of_birth'] = date('Y-m-d', strtotime($registrar['father_date_of_birth']));
        $registrar['mother_date_of_birth'] = date('Y-m-d', strtotime($registrar['mother_date_of_birth']));

        return Inertia::render('Admin/PPDB/Form', [
            'registrar' => $registrar,
        ]);
    }


    public function update(StorePpdbRequest $request, $id)
    {
        $registrar = Ppdb::findOrFail($id);

        $registrar->update($request->validated());

        return back()->with([
            'message' => $request->name.' berhasil diubah' ,
        ]);
    }


    public function destroy($id)
    {
        $ppdb = Ppdb::findOrFail($id);

        $name = $ppdb->name;

        $ppdb->delete();

        return back()->with([
            'message' => $name.' berhasil dihapus',
        ]);
    }

    public function exportAll()
    {
        $fileName = 'data-ppdb-'.date('d-m-Y').'.csv';
        $ppdbs = Ppdb::all();

        $headers = [
            'Content-type'        => 'text/csv',
            'Content-Disposition' => 'attachment; filename='.$fileName,
            'Pragma'              => 'no-cache',
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
            'Expires'             => '0'
        ];

        $columns = [
            'Nama lengkap',
            'NISN',
            'NIK',
            'No. Kartu Keluarga',
            'Tempat lahir',
            'Tanggal lahir',
            'Jenis kelamin',
            'Anak ke-',
            'Jumlah saudara',
            'No. HP/WA',
            'Alamat lengkap',
            'Nama Ayah',
            'NIK Ayah',
            'Tempat lahir Ayah',
            'Tanggal lahir Ayah',
            'Pendidikan Terakhir Ayah',
            'Pekerjaan Ayah',
            'No. HP/WA Ayah',
            'Alamat Ayah',
            'Nama lengkap Ibu',
            'NIK Ibu',
            'Tempat lahir Ibu',
            'Tanggal lahir Ibu',
            'Pendidikan Terakhir Ibu',
            'Pekerjaan Ibu',
            'No. HP/WA Ibu',
            'Alamat lengkap Ibu',
        ];

        $callback = function() use($ppdbs, $columns) {
           
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($ppdbs as $ppdb) {

                $row['Nama lengkap'] = $ppdb['name'];
                $row['NISN'] = $ppdb['nisn'];
                $row['NIK'] = $ppdb['nik'];
                $row['No. Kartu Keluarga'] = $ppdb['no_kk'];
                $row['Tempat lahir'] = $ppdb['place_of_birth'];
                $row['Tanggal lahir'] = date('d/m/Y', strtotime($ppdb['date_of_birth']));
                $row['Jenis kelamin'] = $ppdb['gender'];
                $row['Anak ke-'] = $ppdb['child_order'];
                $row['Jumlah saudara'] = $ppdb['total_brother'];
                $row['No. HP/WA'] = $ppdb['phone'];
                $row['Alamat lengkap'] = $ppdb['address'];
                $row['Nama Ayah'] = $ppdb['father_name'];
                $row['NIK Ayah'] = $ppdb['father_nik'];
                $row['Tempat lahir Ayah'] = $ppdb['father_place_of_birth'];
                $row['Tanggal lahir Ayah'] = date('d/m/Y', strtotime($ppdb['father_date_of_birth']));
                $row['Pendidikan Terakhir Ayah'] = $ppdb['father_last_education'];
                $row['Pekerjaan Ayah'] = $ppdb['father_profession'];
                $row['No. HP/WA Ayah'] = $ppdb['father_phone'];
                $row['Alamat Ayah'] = $ppdb['father_address'];
                $row['Nama lengkap Ibu'] = $ppdb['mother_name'];
                $row['NIK Ibu'] = $ppdb['mother_nik'];
                $row['Tempat lahir Ibu'] = $ppdb['mother_place_of_birth'];
                $row['Tanggal lahir Ibu'] = date('d/m/Y', strtotime($ppdb['mother_date_of_birth']));
                $row['Pendidikan Terakhir Ibu'] = $ppdb['mother_last_education'];
                $row['Pekerjaan Ibu'] = $ppdb['mother_profession'];
                $row['No. HP/WA Ibu'] = $ppdb['mother_phone'];
                $row['Alamat lengkap Ibu'] = $ppdb['mother_address'];
               
                fputcsv($file, [
                    $row['Nama lengkap'],
                    $row['NISN'],
                    $row['NIK'],
                    $row['No. Kartu Keluarga'],
                    $row['Tempat lahir'],
                    $row['Tanggal lahir'],
                    $row['Jenis kelamin'],
                    $row['Anak ke-'],
                    $row['Jumlah saudara'],
                    $row['No. HP/WA'],
                    $row['Alamat lengkap'],
                    $row['Nama Ayah'],
                    $row['NIK Ayah'],
                    $row['Tempat lahir Ayah'],
                    $row['Tanggal lahir Ayah'],
                    $row['Pendidikan Terakhir Ayah'],
                    $row['Pekerjaan Ayah'],
                    $row['No. HP/WA Ayah'],
                    $row['Alamat Ayah'],
                    $row['Nama lengkap Ibu'],
                    $row['NIK Ibu'],
                    $row['Tempat lahir Ibu'],
                    $row['Tanggal lahir Ibu'],
                    $row['Pendidikan Terakhir Ibu'],
                    $row['Pekerjaan Ibu'],
                    $row['No. HP/WA Ibu'],
                    $row['Alamat lengkap Ibu']]);
            }

            fclose($file);
        };

        // dd($callback);

        return response()->stream($callback, 200,$headers);
        // return 'lol';
    }

    public function deleteAll()
    {
        DB::table('ppdbs')->truncate();

        return back()->with([
            'message' => 'berhasil menghapus semua data PPDB',
        ]);
    }

    public function toPdf($id)
    {
        $registrar = Ppdb::findOrFail($id);

        $registrar->date_of_birth = date('d/m/Y', strtotime($registrar->date_of_birth));
        $registrar->father_date_of_birth = date('d/m/Y', strtotime($registrar->father_date_of_birth));
        $registrar->mother_date_of_birth = date('d/m/Y', strtotime($registrar->mother_date_of_birth));

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(
        <<<EOT
        <table>
            <tr>
                <td colspan="2">
                    <h1>Data Pendaftaran Peserta Didik Baru</h1>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Data Pribadi</h2>
                </td>
            </tr>
            <tr>
                <td>Nama lengkap</td>
                <td> $registrar->name </td>
            </tr>
            <tr>
                <td>NISN</td>
                <td> $registrar->nisn </td>
            </tr>
            <tr>
                <td>NIK</td>
                <td> $registrar->nik </td>
            </tr>
            <tr>
                <td>No. Kartu Keluarga</td>
                <td> $registrar->no_kk </td>
            </tr>
            <tr>
                <td>Tempat lahir</td>
                <td> $registrar->place_of_birth </td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td> $registrar->date_of_birth </td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td> $registrar->gender </td>
            </tr>
            <tr>
                <td>Anak ke-</td>
                <td> $registrar->child_order </td>
            </tr>
            <tr>
                <td>Jumlah saudara</td>
                <td> $registrar->total_brother </td>
            </tr>
            <tr>
                <td>No. HP/WA</td>
                <td> $registrar->phone </td>
            </tr>
            <tr>
                <td>Alamat lengkap</td>
                <td> $registrar->address </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Data Ayah</h2>
                </td>
            </tr>
            <tr>
                <td>Nama lengkap</td>
                <td> $registrar->father_name </td>
            </tr>
            <tr>
                <td>NIK</td>
                <td> $registrar->father_nik </td>
            </tr>
            <tr>
                <td>Tempat lahir</td>
                <td> $registrar->father_place_of_birth </td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td> $registrar->father_date_of_birth </td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td> $registrar->father_last_education </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td> $registrar->father_profession </td>
            </tr>
            <tr>
                <td>No. HP/WA</td>
                <td> $registrar->father_phone </td>
            </tr>
            <tr>
                <td>Alamat lengkap</td>
                <td> $registrar->father_address </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Data Ibu</h2>
                </td>
            </tr>
            <tr>
                <td>Nama lengkap</td>
                <td> $registrar->mother_name </td>
            </tr>
            <tr>
                <td>NIK</td>
                <td> $registrar->mother_nik </td>
            </tr>
            <tr>
                <td>Tempat lahir</td>
                <td> $registrar->mother_place_of_birth </td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td> $registrar->mother_date_of_birth </td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td> $registrar->mother_last_education </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td> $registrar->mother_profession </td>
            </tr>
            <tr>
                <td>No. HP/WA</td>
                <td> $registrar->mother_phone </td>
            </tr>
            <tr>
                <td>Alamat lengkap</td>
                <td> $registrar->mother_address </td>
            </tr>
        </table>
        EOT);

        return $pdf->stream();
    }
}
