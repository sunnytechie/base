<template>
  <Head title="Log in" />

<div class="container-fluid mx-0" style="min-height: 100vh">
  <div class="row">
      <div class="col-md-6 p-5 text-center hide-on-mobile" style="margin-top: 80px;">
        <img class="img" height="300" src="/assets/images/undraw_bg.svg" alt="">
      </div>




      <div class="col-md-6" style="height: 100vh; background: #fff;">
          
        <div class="align-middle p-5" style="margin-top: 100px;">
          <div class="text-center">
              <Link href="/">
                <breeze-application-logo width="82" />
              </Link>
          </div>
          <breeze-validation-errors class="mb-3" />

          <div v-if="status" class="alert alert-success mb-3 rounded-0" role="alert">
            {{ status }}
          </div>

          <form @submit.prevent="submit">
            <div class="mb-3">
              <breeze-label for="email" value="Email" style="color: #000" />
              <input class="form-control" style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #ddd; color: #000;" id="email" type="email" v-model="form.email" required autofocus />
            </div>

            <div class="mb-3">
              <breeze-label for="password" value="Password" style="color: #000" />
              <input class="form-control" style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #ddd; color: #000;" id="password" type="password" v-model="form.password" required autocomplete="current-password" />
            </div>

            <div class="mb-3">
              <div class="form-check">
                <breeze-checkbox id="remember_me" name="remember" v-model:checked="form.remember" />

                <label class="form-check-label" for="remember_me">
                  Remember Me
                </label>
              </div>
            </div>

            <div class="mb-0">
              <div class="d-flex justify-content-end align-items-baseline">
                <Link v-if="canResetPassword" :href="route('password.request')" class="text-muted me-3">
                  Forgot your password?
                </Link>

                <breeze-button class="ms-4" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
                  <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  
                  Log in
                </breeze-button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
</div>
    
 

</template>

<script>
import BreezeButton from '@/Components/Button.vue'
import BreezeGuestLayout from "@/Layouts/Guest.vue"
import BreezeInput from '@/Components/Input.vue'
import BreezeCheckbox from '@/Components/Checkbox.vue'
import BreezeLabel from '@/Components/Label.vue'
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'

export default {
  layout: BreezeGuestLayout,

  components: {
    Head,
    BreezeButton,
    BreezeInput,
    BreezeCheckbox,
    BreezeLabel,
    BreezeValidationErrors,
    Link,
    BreezeApplicationLogo,
  },

  props: {
    canResetPassword: Boolean,
    status: String
  },

  data() {
    return {
      form: this.$inertia.form({
        email: '',
        password: '',
        remember: false
      })
    }
  },

  methods: {
    submit() {
      this.form
          .transform(data => ({
            ... data,
            remember: this.form.remember ? 'on' : ''
          }))
          .post(this.route('login'), {
            onFinish: () => this.form.reset('password'),
          })
    }
  }
}
</script>

<style>
  .card {
    background: #212B3E;
  }

  #email, #password {
    border: none;
    border-radius: 4px;
    background: #f9fafc;
    padding-right: 28px;
  }

  #email:focus, #password:focus {  background: transparent; color: #fff; }

  @media screen and (max-width: 426px) {
    .hide-on-mobile {
      display: none;
  }
  }
</style>