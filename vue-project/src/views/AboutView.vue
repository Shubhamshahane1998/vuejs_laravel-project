<template>
  <div class="about">
    <div>
      <!-- <table class="table table-border"> -->
      <table class="table table-bordered text-center container">
        <thead class="table-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Salary</th>
            <th scope="col">age</th>
            <th scope="col">gender</th>
            <th scope="col" style="margin-right: 50px">
              <select
                class="form-select form-select-sm select"
                name="Developer"
                @change="developer($event)"
              >
                <option value="All">Department</option>
                <option value="Designer">Designer</option>
                <option value="Frontend Developer">Frontend Developer</option>
                <option value="Backend Developer">Backend Developer</option>
                <option value="Tester">Software Tester</option>
              </select>
            </th>
            <th scope="col">designation</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(row, index) in dev_data" v-bind:key="index">
            <td>{{ index + 1 }}</td>
            <td>{{ row.name }}</td>
            <td>{{ row.email }}</td>
            <td>{{ row.age }}</td>
            <td>{{ row.gender }}</td>
            <td>{{ row.department }}</td>
            <td>{{ row.designation }}</td>
            <td style="border-radius: 20px">
              <div class="d-grid gap-4 d-md-flex justify-content-md-center">
                <a href="#"
                  ><router-link
                    :to="{ name: 'Edit', params: { id: row.Id } }"
                    class="btn btn-success"
                    >Edit</router-link
                  ></a
                >
                <a href="#" class="btn btn-danger" @click="Delete(row.Id)">Delete</a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import axios from "axios";
import { ref, reactive } from "vue";

export default defineComponent({
  created() {
    this.fetch_data();
    this.Delete();
    // this.developer();
  },

  data: () => ({
    responseData: [],
    dev_data: [],
    id: 0,
    sort: {
      field: "",
      desc: true,
    },
    // id: 0,
    // users:,
  }),

  methods: {
    developer(e) {
      const data = e.target.value;
      const apiUrl = `http://localhost:8000/api/developer/${data}`;
      axios
        .get(apiUrl)
        .then((response) => {
          // Handle the successful response here
          this.dev_data = response.data;
          // alert(response.data);
        })
        .catch((error) => {
          // Handle errors here
          console.error("Error fetching data:", error);
        });
    },

    fetch_data() {
      // alert(this.form);
      // newData.append("formData", JSON.stringify(this.formData));

      const apiUrl = "http://localhost:8000/api/show_data";
      axios
        .get(apiUrl)
        .then((response) => {
          // Handle the successful response here
          this.dev_data = response.data;
        })
        .catch((error) => {
          // Handle errors here
          console.error("Error fetching data:", error);
        });
    },

    Delete($id) {
      const id = $id;
      // alert(id);
      const apiUrl = `http://localhost:8000/api/delete/${id}`;
      axios
        .post(apiUrl)
        .then((response) => {
          // Handle the successful response here
          // this.responseData = response.data;
          this.fetch_data();
          // alert(this.responseData);
          this.$router.push({ name: "about" });
        })
        .catch((error) => {
          // Handle errors here
          console.error("Error fetching data:", error);
        });
    },
  },
});
</script>

<style>
.table {
  text-align: center;
}

.user_row {
  display: flex;
}

.user_row > div {
  flex: 1;
  text-align: center;
}

.select {
  background-color: hsl(0, 1%, 11%);
  color: white;
  font-size: 15px;
  font-weight: bold;
  text-align: center;
  border: 0;
  box-shadow: none;
  margin-bottom: 0;
  margin: auto;
  width: 190px;
}
</style>
