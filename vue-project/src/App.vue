<script setup>
import { RouterLink, RouterView } from "vue-router";
import HelloWorld from "./components/HelloWorld.vue";
</script>

<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">AspireWeb</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <RouterLink to="/Department">Add Employee</RouterLink>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <RouterLink to="/about">Show Member</RouterLink>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <RouterLink to="/abc">practice</RouterLink>
              </a>
            </li>
            <!-- </li>
                <li class="nav-item">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>....Search hear....</option>
                    <option selected><RouterLink to="/Frontend"></RouterLink>Frontend Developer</option>
                    <option selected><RouterLink to="/Backend"></RouterLink>Backend Developer</option>
                    <option selected><RouterLink to="/Tester"></RouterLink>Tester</option>          
                  </select>
                  
                </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <RouterView />
  </div>
</template>
