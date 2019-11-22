<template>
  <div class="w-full">
    <!--<div class="w-full flex items-center justify-between">-->
    <!--<div class="border-b w-full mr-6">-->
    <!--<input-->
    <!--placeholder="Search for Career Title, Location, Department"-->
    <!--class="bg-transparent w-full"-->
    <!--/>-->
    <!--</div>-->
    <!--</div>-->
    <div class="w-full">
      <div class="flex w-full mt-10 justify-end">
        <button
          @click="add"
          class="text-white text-base rounded bg-mmared shadow text-center font-semibold px-4 py-2"
        >Add Position</button>
      </div>
      <h1 class="text-4xl font-semibold mt-10 w-full">Open Positions</h1>

      <div class="w-full">
        <the-career
          v-for="career in careers"
          :key="career.id"
          :title="career.title"
          :location="career.location"
          :department="career.department"
          :extra="career.extra"
          class="mt-10"
        >
          <template slot="actions">
            <button @click="editCareer(career.id)" class="text-mmablue mr-4">Edit</button>
            <button @click="deleteCareer(career.id)" class="text-mmared">Delete</button>
          </template>

          <div class="w-full text-mmadescription">
            <h3 class="font-extrabold text-lg">Responsibilities</h3>
            <p class="mt-4">{{ career.responsibilities }}</p>
            <h3 class="mt-10 font-extrabold text-lg">Requirements</h3>
            <div class="w-full mt-4" v-html="career.requirements"></div>

            <h3 class="mt-10 font-extrabold text-lg">Core Competencies</h3>
            <div class="w-full mt-4" v-html="career.core_competencies"></div>
          </div>
        </the-career>
      </div>
    </div>
  </div>
</template>

<script>
import TheCareer from "../../components/TheCareer";

export default {
  name: "careers-home",
  props: {
    careers: {
      type: Array,
      default: () => []
    }
  },
  components: {
    TheCareer
  },
  methods: {
    editCareer(id) {
      this.$emit("edit", { id });
    },
    deleteCareer(id) {
      this.$emit("delete", { id });
    },
    add() {
      this.$emit("add");
    }
  }
};
</script>
