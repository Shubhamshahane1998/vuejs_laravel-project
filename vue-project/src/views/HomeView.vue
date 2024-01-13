<template>
  <div>
    <form class="container">
      <div>
      <div><input type="hidden" class="form-control border border-warning" id="exampleInputPassword1"
             v-model="responseData.Id"></div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Enter Employee Name:</label>
          <input type="text" class="form-control border border-warning" id="exampleInputPassword1"
            placeholder="Enter name Here" v-model="responseData.name">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Enter Salary</label>
          <input type="text" class="form-control border border-warning" id="exampleInputPassword1"
            placeholder="ex.'10000'" v-model="responseData.email">
  
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Enter Age</label>
          <input type="text" class="form-control border border-warning" id="exampleInputEmail1" placeholder="ex.'20'"
            v-model="responseData.age">
  
        </div>
        <div>
          <span name="gender"> Gender </span>
          <div class="form-check form-check-inline">
            <input class="form-check-input border border-warning" type="radio" name="inlineRadioOptions" id="inlineRadio1"
             value="male" v-model="responseData.gender">
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input border border-warning" type="radio" name="inlineRadioOptions" id="inlineRadio2"
              value="female" v-model="responseData.gender">
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>
        </div>
        <div class="mb-3">
          <span name="Department">Department</span>
          <select class="form-select border border-warning" aria-label="Default select example"
            v-model="responseData.department">
            <option name="Designer">Designer</option>
            <option name="FrontEnd Developer">Frontend Developer</option>
            <option name="BackEnd Developer">Backend Developer</option>
            <option name="Tester">Tester</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Designation</label>
          <input type="text" class="form-control border border-warning" id="exampleInputEmail1"
            placeholder="Enter Here Designation" v-model="responseData.designation">
  
        </div>
        <button type="button" class="btn btn-primary border border-warning" @click="update()">update</button>
      </div>
    </form>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue'
import axios from 'axios';
import Form from 'vform'

export default defineComponent({

  created() {
    this.fetchdata();
    this.update();
  },
  data() {
    return {
      responseData: [],
    }
  },
  methods: {
    fetchdata() {

      if (this.$route.params.id) {
        const id = this.$route.params.id;
        axios.get(`http://localhost:8000/api/edit/${id}`)
          .then(response => {
            // Handle the successful response here
            this.responseData = response.data;
          })
          .catch(error => {
            // Handle errors here
            console.error('Error fetching data:', error);
          });
      }
    },
    data: () => ({
      responseData: new Form({ Id:"" ,name: "", email: "", age: "", gender: "", department: "", designation: "", })
    }),
    update() {
      const apiUrl = 'http://localhost:8000/api/update';
      // alert (this.responseData.Id);
      axios.post(apiUrl, { newData: JSON.stringify(this.responseData) })

        .then(response => {
          // Handle the successful response here
         if( this.responseData = response.data)
         {
           alert(this.responseData);
           this.$router.push({name: "about", });
         }
        })
        .catch(error => {
          // Handle errors here
          console.error('Error fetching data:', error);
        });
      // const apiUrl = 'http://localhost:8000/api/${id}';
      // axios.get(apiUrl)

    },
  },
})
</script>

<style>
.table {
  text-align: center;
}
</style>