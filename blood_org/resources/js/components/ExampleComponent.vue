<template>
    <div class="container">
<div class="flex-center position-ref full-height">
                <div class="content">

                   <!-- <div class="hero row align-items-center">
                        <div class="col-md-7">
                            <h2>Best & Trusted</h2>
                            <h2><span>Cleaning</span> Service</h2>
                            <p>Lorem ipsum dolor sit amet elit pretium facilisis ornare</p>
                            <a class="btn" href="">Explore Now</a>
                        </div>
                        <div class="col-md-5">
                            <div class="form">
                                <h3>Get A Quote</h3>
                                <form>
                                    <input class="form-control" type="text" placeholder="Your Name">
                                    <input class="form-control" type="text" placeholder="Mobile Number">
                                    <div class="control-group">
                                        <select class="custom-select">
                                            <option selected>Choose a service</option>
                                            <option value="1">House Cleaning</option>
                                            <option value="2">Apartment Cleaning</option>
                                            <option value="3">Office Cleaning</option>
                                        </select>
                                    </div>
                                    <textarea class="form-control" placeholder="Comment"></textarea>
                                    <button class="btn btn-block">Get A Quote</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
<!-- 
                    <div class="title m-b-md">
                        Add New Donor
                    </div>
                    <div v-if="!hasError" class="alert alert-danger" role="alert" v-bind:class="{hidden: hasError}">
                        All fields are required!
                    </div>
                    <div class="form-group">
                        <label for="make">Donor Name</label>
                        <input type="text" class="form-control" id="make" required placeholder="Donor Name" name="make" v-model="newCar.make">
                    </div>
                                        
                    <div class="form-group">
                        <label for="model">Blood Group</label>
                        <input type="text" class="form-control" id="model" required placeholder="Blood Group" name="model" v-model="newCar.model">
                    </div>
                    
                    <div class="form-group">
                        <label for="number">Contact Number</label>
                        <input type="text" class="form-control" id="number" required placeholder="Contact Number" name="number" v-model="newCar.number">
                    </div>
                    <div class="form-group">
                        <label for="gmail ">Email ID</label>
                        <input type="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="gmail" required placeholder="Email ID" name="gmail" v-model="newCar.gmail">
                    </div>


                    <button class="btn btn-primary" @click.prevent="createCar()">
                        Add Donor
                    </button> -->

                <table class="table table-striped" id="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Donor Name</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email ID</th>
                        
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for ="(car, index) in cars" :key="index">
                        <th scope="row">{{car.id}}</th>
                        <td>{{car.make}}</td>
                        <td>{{car.model}}</td>
                        <td>{{car.number}}</td>
                        <td>{{car.gmail}}</td>
                        <td @click="setVal(car.id, car.make, car.model,car.number,car.gmail)"   class="btn btn-info btn-sm m-1" data-toggle="modal" data-target="#myModal">Edit
                        </td>
                        <td  click.prevent="deleteCar(car)" class="btn btn-danger m-1 btn-sm"> 
                        <i class="fa fa-trash"></i>
                        </td>
                        </tr>
                    </tbody>
                </table>

                    <!-- Modal -->
                    <div id="myModal" class="modal " role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit car</h4>
                        </div>
                        <div class="modal-body">
                            
                        <input type="hidden" disabled class="form-control" id="e_id" name="id"
                                                    required  :value="this.e_id">
                                            Donor Name: <input type="text" class="form-control" id="e_make" name="make"
                                                    required  :value="this.e_make">
                                            Blood Group: <input type="text" class="form-control" id="e_model" name="model"
                                            required  :value="this.e_model">
                                            Number: <input type="text" class="form-control" id="e_number" name="number"
                                            required  :value="this.e_number">
                                            Gmail: <input type="email" class="form-control" id="e_gmail" name="gmail"
                                            required  :value="this.e_gmail">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary" @click="editCar()">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return{
            count: 100,
              newCar: {'make': '', 'model': '','number': '','gmail': ''},
        hasError: true,
        cars: [],
         e_id: '',
        e_make: '',
        e_model: '',
         e_number: '',
         e_gmail: '',
          

            }
     },
     methods:{
         Test(){
             console.log( "hi");
         },
                 deleteCar(car) {
            var _this = this;
            axios.post('/deleteCar/' + car.id).then(function(response){
                _this.getCars();
            }).catch(error=>{
                console.log("Delete car: "+error);
            });
        },
        setVal(val_id, val_make, val_model,val_number,val_gmail) {

            this.e_id = val_id;
            this.e_make = val_make;
            this.e_model = val_model;
            this.e_number = val_number;
            this.e_gmail = val_gmail ;
        },
        editCar(){
            var _this = this;
            
            var id_val_1 = document.getElementById('e_id');
            var make_val_1 = document.getElementById('e_make');
            var model_val_1 = document.getElementById('e_model');
            var number_val_1 = document.getElementById('e_number');
            var gmail_val_1 = document.getElementById('e_gmail');
            var model = document.getElementById('myModal').value;
            alert(gmail_val_1.value);
                 if (!this.validEmail(gmail_val_1.value)) {
                alert('Please write a valid e-mail.');
             this.hasError = false;
      }
            
           else{  axios.post('/editCars/' + id_val_1.value, {val_1: make_val_1.value, val_2: model_val_1.value , val_3: number_val_1.value, val_4: gmail_val_1.value })
               .then(response => {
                 _this.getCars();
               });
                       $('#myModal').modal('hide');
                        $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();

}     },
         getCars(){
             
            // var _this = this;
            axios.get('/getCars').then((response)=>{
                    
                this.cars = response.data;
                console.log(response);
            
            }).catch(error=>{
                console.log("Get All: "+error);
            });
        },
        createCar() {
            
            var input = this.newCar;
            var _this = this;
            
            if (!this.validEmail(input['gmail'])) {
                alert('Please write a valid e-mail.');
             this.hasError = false;
      }
          else  if(input['make'] == '' || input['model'] == '' || input['number'] == ''|| input['gmail'] == '') {
                this.hasError = false;
            }
            else {
                
                this.hasError= true;
                axios.post('/storeCar', input).then(function(response){
                    _this.newCar = {'make': '', 'model': '' , 'number': '' , 'gmail': ''}
                    _this.getCars();
                }).catch(error=>{
                    console.log("Insert: "+error);
                });
            }
        },
         validEmail (email) {
      var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
     },
     
        mounted() {
            this.getCars();

            console.log('Component mounted.',  this.getCars())
        }
    }
</script>
