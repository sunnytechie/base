<template>
  <section>
    <Nav />

    <!-- Page Content -->
    <section>
      <slot />
    </section>

    <!-- Footer -->
    <Footer />
   

    <!-- Ofcanvas -->
    <Sidebar />

  </section>
</template>

<script>
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import BreezeDropdown from '@/Components/Dropdown.vue'
import BreezeDropdownLink from '@/Components/DropdownLink.vue'
import BreezeNavLink from '@/Components/NavLink.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'
import Nav from '../Pages/Shared/Nav.vue'
import Footer from '../Pages/Shared/Footer.vue'
import Sidebar from '../Pages/Shared/Sidebar.vue'

export default {
  components: {
    BreezeApplicationLogo,
    BreezeDropdown,
    BreezeDropdownLink,
    BreezeNavLink,
    Link,
    Nav,
    Footer,
    Sidebar,
  },

  data() {
    return {
      showingNavigationDropdown: false,
    }
  },

  methods: {
    logout() {
      Inertia.post(route("logout"));
    }
  },
}
</script>
