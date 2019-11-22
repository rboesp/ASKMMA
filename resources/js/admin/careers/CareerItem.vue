<template>
  <div>
    <div class="w-full">
      <button class="text-xl mb-4 underline font-semibold text-mmagray" @click="back">< BACK</button>
    </div>
    <accordion-component :parent-show="true">
      <template slot="header">
        <div class="w-full flex flex-wrap text-base bg-white rounded-lg items-center">
          <div class="w-full lg:w-4/5 flex flex-wrap">
            <div class="w-full mt-2 px-2 lg:m-0 lg:w-1/4">
              <span class="text-grey-dark">Job Title *</span>
              <br />
              <span class="font-semibold text-mmadescription">
                <input
                  v-model="form.title"
                  class="w-full rounded border-mmablue border p-2"
                  required
                />
              </span>
            </div>

            <div class="w-full mt-2 px-2 lg:m-0 lg:w-1/4">
              <span class="text-grey-dark">Location *</span>
              <br />
              <span class="font-semibold text-mmadescription">
                <input
                  v-model="form.location"
                  class="w-full rounded border-mmablue border p-2"
                  required
                />
              </span>
            </div>
            <div class="w-full mt-2 px-2 lg:m-0 lg:w-1/4">
              <span class="text-grey-dark">Department</span>
              <br />
              <span class="font-semibold text-mmadescription">
                <input v-model="form.department" class="w-full rounded border-mmablue border p-2" />
              </span>
            </div>
            <div class="w-full mt-2 px-2 lg:m-0 lg:w-1/4">
              <span class="text-grey-dark">Salary + Extra</span>
              <br />
              <span class="font-semibold text-mmadescription">
                <input v-model="form.extra" class="w-full rounded border-mmablue border p-2" />
              </span>
            </div>
          </div>
          <!--<div class="flex flex-wrap items-center w-full mt-2 lg:m-0 lg:w-1/5 justify-end font-semibold">-->
          <!--<slot name="actions">-->

          <!--</slot>-->
          <!--</div>-->
        </div>
      </template>

      <div class="w-full mt-10">
        <h3 class="font-extrabold text-lg">Responsibilities *</h3>
        <textarea
          rows="10"
          v-model="form.responsibilities"
          class="rounded-sm w-full my-2 border-2 border-gray-300 py-2 px-4 text-gray-700 text-base leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
          required
        ></textarea>
      </div>

      <div class="w-full mt-10">
        <h3 class="font-extrabold text-lg">Requirements *</h3>
        <TextEditor v-model="form.requirements" />
      </div>

      <div class="w-full mt-10">
        <h3 class="font-extrabold text-lg">Core Competencies</h3>
        <TextEditor v-model="form.core_competencies" />
      </div>

      <div class="w-full mt-10">
        <h3 class="font-extrabold text-lg">Notes</h3>
        <textarea
          rows="2"
          v-model="form.notes"
          class="rounded-sm w-full my-2 border-2 border-gray-300 py-2 px-4 text-gray-700 text-base leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
        ></textarea>
      </div>

      <slot name="footer" />
    </accordion-component>
  </div>
</template>

<script>
import TextEditor from "./components/TextEditor";
export default {
  name: "CareerItem",
  props: {
    value: {
      type: Object,
      default: () => ({})
    }
  },
  components: {
    TextEditor
  },
  data: () => ({
    form: null
  }),
  methods: {
    back() {
      this.$emit("back", true);
    }
  },
  watch: {
    value: {
      deep: true,
      handler(value) {
        this.form = value;
      }
    },
    form: {
      deep: true,
      handler(value) {
        this.$emit("input", value);
      }
    }
  },
  created() {
    this.form = this.value;
  }
};
</script>
