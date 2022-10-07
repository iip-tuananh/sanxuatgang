<template>
  <div>
      <h3 class="page-title">Cài đặt chung</h3>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body" >
                <div class="form-group">
                  <label>Tên doanh nghiệp</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.company"
                  />
                </div>
                <div class="form-group">
                  <label>Tên website</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.webname"
                  />
                </div>
                <div class="form-group">
                  <label>Văn phòng đại diện</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.address1"
                  />
                </div>
                <div class="form-group">
                  <label>Địa chỉ</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.address2"
                  />
                </div>
                <div class="form-group">
                  <label>Địa chỉ</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.address3"
                  />
                </div>
                <div class="form-group">
                  <label>Số hotline chính hoặc VPGD</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone1"
                  />
                </div>
                <div class="form-group">
                  <label>Số hotline miền bắc</label>
                  <!-- <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone2"
                  /> -->
                  <div v-for="(item, index) in objData.phone2" :key="index">
                  <div class="row">
                    <div class="col-4">
                      <vs-input
                        type="text"
                        size="default"
                        :placeholder="'Tên ' + index"
                        class="w-100"
                        v-model="objData.phone2[index].name"
                      />
                    </div>
                    <div class="col-6">
                      <vs-input
                        type="text"
                        size="default"
                        :placeholder="'Số điện thoại ' + index"
                        class="w-100"
                        v-model="objData.phone2[index].number"
                      />
                    </div>
                    <div class="col-2">
                      <a
                        href="javascript:;"
                        v-if="index != 0"
                        @click="remoteAr(index,'phone2')"
                      >
                        <img v-bind:src="'/media/' + joke.avatar" width="25" />
                      </a>
                    </div>
                  </div>
                  </div>
                  <el-button size="small" @click="addInput('phone2')"
                  >Thêm số</el-button>
                </div>
                <div class="form-group">
                  <label>Số hotline miền nam</label>
                  <!-- <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone3"
                  /> -->
                  <div v-for="(item, index) in objData.phone3" :key="index">
                  <div class="row">
                    <div class="col-4">
                      <vs-input
                        type="text"
                        size="default"
                        :placeholder="'Tên ' + index"
                        class="w-100"
                        v-model="objData.phone3[index].name"
                      />
                    </div>
                    <div class="col-6">
                      <vs-input
                        type="text"
                        size="default"
                        :placeholder="'Số điện thoại ' + index"
                        class="w-100"
                        v-model="objData.phone3[index].number"
                      />
                    </div>
                    <div class="col-2">
                      <a
                        href="javascript:;"
                        v-if="index != 0"
                        @click="remoteAr(index,'phone3')"
                      >
                        <img v-bind:src="'/media/' + joke.avatar" width="25" />
                      </a>
                    </div>
                  </div>
                  </div>
                  <el-button size="small" @click="addInput('phone3')"
                  >Thêm số</el-button>
                </div>
                <div class="form-group">
                  <label>Zalo Number</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.zalo_number"
                  />
                </div>
                <div class="form-group">
                  <label>Mã số thuế</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.fax"
                  />
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.email"
                  />
                </div>
                <div class="form-group">
                  <label>Facebook</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.facebook"
                  />
                </div>
                <div class="form-group">
                  <label>Instagram</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.google"
                  />
                </div>
                <div class="form-group">
                  <label>Twitter</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.GA"
                  />
                </div>
                <div class="form-group">
                  <label>Linkedin</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.fbPixel"
                  />
                </div>
                <div class="form-group">
                  <label>Iframe GG map</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.iframe_map"
                  />
                </div>
                <div class="form-group">
                  <label>Favicon</label>
                  <image-upload type="avatar" v-model="objData.favicon" :title="'favicon'"></image-upload>
                </div>
                <div class="form-group">
                  <label>Logo</label>
                  <image-upload type="avatar" v-model="objData.logo" :title="'logo'"></image-upload>
                </div>
                <!-- <div class="form-group">
                  <label>Ảnh Popup</label>
                  <image-upload type="avatar" v-model="objData.popupimage" :title="'popupimage'"></image-upload>
                </div> -->
                <!-- <div class="form-group">
                  <label>Link Popup</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.linkpopup"
                  />
                </div> -->
                <!-- <div class="form-group">
                  <label>Trạng thái hiển thị popup</label>
                  <vs-select v-model="objData.statusPopup"
                  >
                      <vs-select-item  value="1" text="Hiện" />
                      <vs-select-item  value="0" text="Ẩn" />
                    </vs-select>
                </div> -->
              <vs-button color="primary" @click="saveSetting">Lưu</vs-button>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
  </div>
</template>


<script>
import { mapActions } from "vuex";
import { required } from "vuelidate/lib/validators";
import TinyMce from "../_common/tinymce";
export default {
  name: "setting",
  data() {
    return {
      joke: {
        avatar: "delete-sign--v2.png",
      },
      objData:
        {
            webname : "",
            company : "",
            address1: "",
            address2 : "",
            address3 : "",
            phone1 : "",
            zalo_number : "",
            phone2 : [{
              name: '',
              number: ''
            }],
            phone3 : [{
              name: '',
              number: ''
            }],
            fax : "",
            email : "",
            facebook : "",
            google : "",
            GA : "",
            fbPixel : "",
            iframe_map : "",
            favicon : "",
            logo : "",
            footer_content:"",
            popupimage:"",
            statusPopup:1,
            linkpopup:""
        }
    };
  },
  components: {
    TinyMce
  },
  computed: {},
  watch: {},
  methods: {
    ...mapActions(["postSetting", "loadings","getSetting"]),
    saveSetting(){
      this.loadings(true);
      this.postSetting(this.objData).then(response => {
        this.loadings(false);
        this.$success('Cài đặt thành công');
      }).catch(error => {
        this.loadings(false);
        this.$error('Cài đặt thất bại');
      })
    },
    listSettings(){
      this.loadings(true);
      this.getSetting().then(response => {
        this.loadings(false);
        this.objData = response.data;
        this.objData.phone2 = JSON.parse(response.data.phone2);
        this.objData.phone3 = JSON.parse(response.data.phone3);
      }).catch(error => {
        this.loadings(false);;
      })
    },
    remoteAr(index,key) {
      if(key == 'phone2'){
        this.objData.phone2.splice(index, 1);
      }
      if(key == 'phone3'){
        this.objData.phone3.splice(index, 1);
      }
        
    },
    addInput(key) {
        var oj = {};
        if(key =='phone2'){
          oj.name = "";
          oj.number = "";
          this.objData.phone2.push(oj);
        }
        if(key =='phone3'){
          oj.name = "";
          oj.number = "";
          this.objData.phone3.push(oj);
        }
    },
  },
  mounted() {
    this.listSettings();
  }
};
</script>