<template>
  <section>
    <Nav />
    <!-- Page Heading -->
    <!-- <header class="d-flex py-3 bg-white shadow-sm border-bottom">
      <div class="container">
        <slot name="header" />
      </div>
    </header> -->

    <!-- Page Content -->
    <section>
      <slot />
    </section>

    <!-- Footer -->
    <Footer />

    <!-- Modal -->
    <Modal />

   

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
import Modal from '../Pages/Shared/Modal.vue'
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
    Modal,
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
