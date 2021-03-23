<template>
    
                    <div class="hero row align-items-center">
                      
                        <div class="col-md-7">
                            <div class="form">
                                <h3>Be A Donor</h3>
                                <form>
                                    <!-- <input class="form-control" type="text" placeholder="Your Name"> -->
                                    <input type="text" class="form-control" id="make" required placeholder="Donor Name" name="make" v-model="newCar.make">
                                    <input type="text" class="form-control" id="number" required placeholder="Contact Number" name="number" v-model="newCar.number"> 

                                    <div class="control-group">
                                        <select class="custom-select" id="model"   v-model="newCar.model">
                                              <option disabled value="">Blood Group</option>
                                            <option value="A+">A+</option>
                                            <option value="AB+">AB+</option>
                                             <option value="B+">B+</option>      
                                             <option value="O+">O+</option>
                                             <option value="AB-">AB-</option>
                                             <option value="A-">A-</option>
                                             <option value="B-">B-</option>
                                             <option value="O-">O-</option>
                                             
                                                                               </select>
                                    </div>
                                    <input type="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="gmail" required placeholder="Email ID" name="gmail" v-model="newCar.gmail">
                                    <!-- <button class="btn btn-block">Get A Quote</button> -->
                                    <button class="btn btn-block" @click.prevent="createCar()">
                        Save
                    </button>
                                </form>
                            </div>
                        </div>
                          <div class="col-md-5">
                            <h2>Be A Part Of Our</h2>
                            <h2><span>Organization</span> </h2>
                            <p>You don't have to be a doctor to save lives.</p>
                            <!-- <a class="btn" href="">Explore Now</a> -->
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
                 
               alert('Successfully added.')
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

