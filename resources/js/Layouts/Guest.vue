<template>
  <!-- <Link href="/">
            <breeze-application-logo width="82" />
          </Link> -->
        <section>
          <slot />
        </section>
</template>

<script>
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import { Link } from '@inertiajs/inertia-vue3';

export default {
  components: {
    BreezeApplicationLogo,
    Link,
  }
}
</script>
