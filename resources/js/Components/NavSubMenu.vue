<template>
    <Menu as="div" class="relative inline-block text-center">
      <div>
        <MenuButton
          class="btn btn-ghost btn-sm rounded-btn inline"
        >
          <slot name="menu" />
        </MenuButton>
      </div>

      <transition
        enter-active-class="transition duration-100 ease-out"
        enter-from-class="transform scale-95 opacity-0"
        enter-to-class="transform scale-100 opacity-100"
        leave-active-class="transition duration-75 ease-in"
        leave-from-class="transform scale-100 opacity-100"
        leave-to-class="transform scale-95 opacity-0"
      >
        <MenuItems
          class="absolute right-0 min-w-fit mt-2 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg focus:outline-none"
        >
          <div class="px-1 py-1 text-gray-900">
            <slot name="submenu" />
          </div>
        </MenuItems>
      </transition>
    </Menu>
</template>

<script>
import { Menu, MenuButton, MenuItems } from '@headlessui/vue'


export default {
    components: {
		Menu, 
		MenuButton, 
		MenuItems,
	},
    props: {
        name: {
            default: 'options',
        }
    }
}
</script>
