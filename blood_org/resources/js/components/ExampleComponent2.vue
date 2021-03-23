<template>
  <div class="container">
    <div class="flex-center position-ref full-height">
      
      <div class="content " style="marging-bottom: 5px">
          <div class="card p-1"  style="margin-bottom: 15px !important;">
        <div class="card-header">Post</div>
        <!-- 'bld_grp', 'description', 'location' , 'date' -->
        <div
          v-if="!hasError"
          class="alert alert-danger"
          role="alert"
          v-bind:class="{ hidden: hasError }"
        >
          All fields are required!
        </div>
        <!-- <div class="form-group">
          <label for="bld_grp">Blood Group</label>
          <input
            type="text"
            class="form-control"
            id="bld_grp"
            required
            placeholder="bld_grp"
            name="bld_grp"
            v-model="newPost.bld_grp"
          />
        </div> -->
        <div class="control-group">
                                        <select class="form-control" id="bld_grp"   v-model="newPost.bld_grp">
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
        <div class="form-group">
          <label for="description"> Description </label>
          <textarea
            class="form-control"
            id="description"
            required
            placeholder="description"
            name="description"
            v-model="newPost.description"
          >
 ></textarea
          >
          <!-- <input type="text" class="form-control" id="description" required placeholder="description" name="description" v-model="newPost.description"> -->
        </div>

        <div class="form-group">
          <label for="location"> Location </label>
          <input
            type="text"
            class="form-control"
            id="location"
            required
            placeholder="Contact location"
            name="location"
            v-model="newPost.location"
          />
        </div>
        
        <div class="form-group">
          <label for="date "> Date </label>
          <input
            type="date"
            class="form-control"
            id="date"
            required
            placeholder="Email ID"
            name="date"
            v-model="newPost.date"
          />
        </div>

        <button class="btn btn-primary" @click.prevent="createPost()" style="marging-bottom: 5px">
          Add Post
        </button>
</div>
<br>
<hr>
<br>
<div class="content">
    <div class="row">
    
  <div class="col-6" v-for="(Post, index) in Posts" :key="index">
    <div class="card">
      <div class="card-body">
                <h5 class="font-weight-bold" >{{ Post.user.name }}</h5>

         <p style="font-size:10px;" class="card-text">Posted at {{moment(Post.created_at).fromNow()}}</p> 
        <p class="card-text"><span>Blood Group: </span> {{ Post.bld_grp }}</p> 
        <p class="card-text">Description: {{ Post.description }}</p>
        <p class="card-text">Location: {{ Post.location }}</p>
        <p class="card-text">Date: {{ Post.date }}</p>
        <button v-if="Post.user_id==user.id"  @click="
                  setVal(
                    Post.id,
                    Post.bld_grp,
                    Post.description,
                    Post.location,
                    Post.date
                  )
                "  data-toggle="modal"
                data-target="#myModal" class="btn btn-primary btn-sm">Edit</button>
                <button v-if="Post.user_id==user.id"  @click.prevent="deletePost(Post)"
                class="btn btn-danger  btn-sm"
              >
                <i class="fa fa-trash"></i></button>
      
       </div>
    </div>
  </div>
  
</div>
</div>
        

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  &times;
                </button>
                <h4 class="modal-title">Edit Post</h4>
              </div>
              <div class="modal-body">
                <input
                  type="hidden"
                  disabled
                  class="form-control"
                  id="e_id"
                  name="id"
                  required
                  :value="this.e_id"
                />
                Blood Group:
                <input
                  type="text"
                  class="form-control"
                  id="e_bld_grp"
                  name="bld_grp"
                  required
                  :value="this.e_bld_grp"
                />
                Description:
                <input
                  type="text"
                  class="form-control"
                  id="e_description"
                  name="description"
                  required
                  :value="this.e_description"
                />
                Location:
                <input
                  type="text"
                  class="form-control"
                  id="e_location"
                  name="location"
                  required
                  :value="this.e_location"
                />
                Date:
                <input
                  type="text"
                  class="form-control"
                  id="e_date"
                  name="date"
                  required
                  :value="this.e_date"
                />
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-primary"
                  @click="editPost()"
                >
                  Save changes
                </button>
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
var moment = require('moment');
export default {
  data: function () {
    return {
      moment:moment,
      count: 100,
      newPost: { bld_grp: "", description: "", location: "", date: "" },
      hasError: true,
      Posts: [],
      e_id: "",
      e_bld_grp: "",
      e_description: "",
      e_location: "",
      e_date: "",
    };
  },
   props : ['user'],
  methods: {
    Test() {
      console.log("hi");
    },
    deletePost(Post) {
      var _this = this;
      axios
        .post("/deletePost/" + Post.id)
        .then(function (response) {
          _this.getPosts();
        })
        .catch((error) => {
          console.log("Delete Post: " + error);
        });
    },
    setVal(val_id, val_bld_grp, val_description, val_location, val_date) {
      this.e_id = val_id;
      this.e_bld_grp = val_bld_grp;
      this.e_description = val_description;
      this.e_location = val_location;
      this.e_date = val_date;
    },
    editPost() {
      var _this = this;
      var id_val_1 = document.getElementById("e_id");
      var bld_grp_val_1 = document.getElementById("e_bld_grp");
      var description_val_1 = document.getElementById("e_description");
      var location_val_1 = document.getElementById("e_location");
      var date_val_1 = document.getElementById("e_date");
      var description = document.getElementById("myModal").value;
      axios
        .post("/editPosts/" + id_val_1.value, {
          val_1: bld_grp_val_1.value,
          val_2: description_val_1.value,
          val_3: location_val_1.value,
          val_4: date_val_1.value,
        })
        .then((response) => {
          _this.getPosts();
        });
        
                 $('#myModal').modal('hide');
                        $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();

    },
    getPosts() {
      // var _this = this;
      axios
        .get("/getPosts")
        .then((response) => {
          this.Posts = response.data;
          console.log(response);
        })
        .catch((error) => {
          console.log("Get All: " + error);
        });
    },
    createPost() {
      var input = this.newPost;
      var _this = this;
      if (
        input["bld_grp"] == "" ||
        input["description"] == "" ||
        input["location"] == "" ||
        input["date"] == ""
      ) {
        this.hasError = false;
      } else {
        this.hasError = true;
        axios
          .post("/storePost", input)
          .then(function (response) {
            _this.newPost = {
              bld_grp: "",
              description: "",
              location: "",
              date: "",
            };
            _this.getPosts();
          })
          .catch((error) => {
            console.log("Insert: " + error);
          });
      }
    },
  },

  mounted() {
    this.getPosts();

    console.log("Component mounted.", this.getPosts());
  },
};
</script>
