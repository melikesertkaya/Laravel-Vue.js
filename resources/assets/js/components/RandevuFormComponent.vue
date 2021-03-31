<template>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <input type="text" class="form-control" v-model="name" placeholder="Ad Soyad">
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" v-model="email" placeholder="Email">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" v-model="phone" placeholder="Phone">
        </div>
      </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <input class="form-control" v-model="date" type="date">
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <ul class="select-time-ul">
      <li class="select-time">
        <input type="radio">
        <span>10.00-11.00</span>
      </li>
      <li class="select-time">
        <input type="radio">
       <span>11.00-12.00</span>
      </li>
      <li class="select-time">
        <input type="radio">
        <span>12.00-13.00</span>
      </li>
      <li class="select-time">
        <input type="radio">
        <span>14.00-15.00</span>
      </li>
      <li class="select-time">
        <input type="radio">
        <span>16.00-17.00</span>
      </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <textarea v-model="text" id="" class="form-control" cols="30" rows="10"></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
    <button v-on:click="store" class="btn btn-success">Randevu Oluştur</button>
  </div>
  </div>
</div>
</template>

<script>
export default
{
  data(){
    return {
      name:'',
      email:'',
      phone:'',
      text:'',
      date:new Date().toISOString().slice(0,10),
      workingHours:[]
    }
  },
  mounted(){
    console.log("Ben geldim");
  },
 methods:{
    store:function (){

      console.log("Tıklandı");
    }
 }
}
</script>