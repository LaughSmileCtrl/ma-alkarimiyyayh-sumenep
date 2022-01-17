<template>
    <Menu as="div" class="relative inline-block text-left">
      <div>
        <MenuButton
          class="px-3 py-2 rounded-xl"
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
          class="ml-2"
        >
            <slot name="submenu" />
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
