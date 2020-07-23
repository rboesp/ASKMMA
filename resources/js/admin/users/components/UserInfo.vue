<template>
    <div class="w-full flex flex-wrap items-center">
        <app-input
            placeholder="Name"
            v-model="form.name"
            class="w-1/3 px-2 py-3"
            name="name"
            label="Name"
        />
        <app-input
            placeholder="Email"
            v-model="form.email"
            class="w-1/3 px-2 py-3"
            name="email"
            label="Email"
            type="email"
        />
        <app-input
            placeholder="Zip"
            v-model="form.zip"
            class="w-1/3 px-2 py-3"
            name="zip"
            label="Zip Code"
            mode="zip"
        />
        <app-input
            placeholder="Phone"
            v-model="form.phone"
            class="w-1/3 px-2 py-3"
            name="phone"
            label="Phone"
            mode="phone"
        />
        <app-input
            placeholder="NPN"
            v-model="form.npn"
            class="w-1/3 px-2 py-3"
            name="npn"
            label="NPN"
            type="number"
        />
        <app-input
            placeholder="********"
            v-model="form.password"
            class="w-1/3 px-2 py-3"
            name="password"
            label="Password"
            type="password"
        />

        <div class="flex items-center w-1/3">
            <label
                class="font-semibold block mb-2 leading-tight text-sm mr-2"
            >
                Sunfire Access
            </label>
            <input
                type="checkbox"
                name="sunfire_access"
                v-model="form.sunfire_access"
                class="block text-base font-normal bg-white border text-grey-700"
            />
        </div>
    </div>
</template>

<script>
import DumbComponentMixin from "../../../mixins/dumb-component";
import AppInput from "../../../components/common/AppInput";

  export default {
    name: 'UserInfo',
    components: {AppInput},
    mixins: [DumbComponentMixin],
    mounted() {
      if(typeof this.value !==  "string") return
      this.form = JSON.parse(this.value)
    }
  }
</script>

<style scoped></style>
