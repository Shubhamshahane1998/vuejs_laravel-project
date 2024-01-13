<template>
  <div>
    <form class="container">
      <div style="text-align:center; color:blue">
        <h2>.....Welcome To AspireWeb.....</h2>
        <h4>Enter Employee Detail</h4>
      </div>
      <hr />
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Enter Employee Name:</label>
        <input type="text" class="form-control border border-warning" id="exampleInputPassword1"
          placeholder="Enter name Here" v-model="form.name">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Enter Salary</label>
        <input type="text" class="form-control border border-warning" id="exampleInputPassword1" placeholder="ex.'10000'"
          v-model="form.email">
  
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Enter Age</label>
        <input type="text" class="form-control border border-warning" id="exampleInputEmail1" placeholder="ex.'20'"
          v-model="form.age">
  
      </div>
      <div>
        <span name="gender"> Gender </span>
        <div class="form-check form-check-inline">
          <input class="form-check-input border border-warning" type="radio" name="inlineRadioOptions" id="inlineRadio1"
            value="male" v-model="form.gender">
          <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input border border-warning" type="radio" name="inlineRadioOptions" id="inlineRadio2"
            value="female" v-model="form.gender">
          <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
      </div>
      <div class="mb-3">
        <span name="Department">Department</span>
        <select class="form-select border border-warning" aria-label="Default select example" v-model="form.department">
          <option name="Designer">Designer</option>
          <option name="FrontEnd Developer">Frontend Developer</option>
          <option name="BackEnd Developer">Backend Developer</option>
          <option name="Tester">Tester</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Designation</label>
        <input type="text" class="form-control border border-warning" id="exampleInputEmail1"
          placeholder="Enter Here Designation" v-model="form.designation">
  
      </div>
      <button type="button" class="btn btn-primary border border-warning" @click="fetchdata()">Submit</button>
    </form>
    {{responseData}}
  </div>
</template>
<script lang="ts">
import axios from 'axios';
import Form from 'vform'
import { defineComponent } from 'vue'
export default defineComponent({
  // data() {
  //   return {
  //     name: "",
  //     email: "",
  //     age: "",
  //     gender: "",
  //     Department: "",
  //     Designation: "",
  //     responseData: {},
  //   };

  // },
    components: {
   },
  data: () => ({
    form: new Form({ name: "", email: "", age: "", gender: "", department: "", designation: "", })
  }),
  // mounted() {
  //   this.fetchdata();
  // },

  methods: {
    fetchdata() {
      // alert(this.form);
    // newData.append("formData", JSON.stringify(this.formData));
      
      const apiUrl = 'http://localhost:8000/api/insert_data';
      axios.post(apiUrl,{newData:JSON.stringify(this.form)})
        // {
        //   // ['name']: this.name,
        //   // ['email']: this.email,
        //   // ['age']: this.age,
        //   // ['gender']: this.gender,
        //   // ['Department']: this.Department,
        //   // ['Designation']: this.Designation
        //   newData:newData,
        // })
      
        .then(response => {
          // Handle the successful response here
          // this.responseData = response.data;
          alert("Record Save Successfully");
        })
        .catch(error => {
          // Handle errors here
          console.error('Error fetching data:', error);
        });
    },
  },


});
</script>

<style>
h2 {
  color: chocolate;
  text-align: center;
}

input {
  border-color: red;
  color: rgb(155, 96, 7)
}
</style>