<template>
  <form @submit.prevent="submit" method="post" action="/location">

    <div v-if="alert.message" :class="['alert alert-' + alert.type]">
      <p>{{ alert.message }}</p>
    </div>

    <div :class="['form-group', { 'has-error' : errors.province }]">
      <label class="control-label">Provinsi</label>
      <select @change="province" v-model="state.province" class="form-control">
        <option value="">Pilih Provinsi</option>
        <option v-for="province in provinces" :key="province.id">
          {{ province.name }}
        </option>
      </select>
      <span v-if="errors.province" class="label label-danger">
        {{ errors.province[0] }}
      </span>
    </div>

    <div :class="['form-group', { 'has-error' : errors.city }]">
      <label class="control-label">Kota/kabupaten</label>
      <select @change="city" v-model="state.city" class="form-control">
        <option value="">Pilih Kota/Kabupaten</option>
        <option v-for="city in cities" :key="city.id">
          {{ city.name }}
        </option>
      </select>
      <span v-if="errors.city" class="label label-danger">
        {{ errors.city[0] }}
      </span>
    </div>

    <div :class="['form-group', { 'has-error' : errors.district }]">
      <label class="control-label">Kecamatan</label>
      <select v-model="state.district" class="form-control">
        <option value="">Pilih Kecamatan</option>
        <option v-for="district in districts" :key="district.id">
          {{ district.name }}
        </option>
      </select>
      <span v-if="errors.district" class="label label-danger">
        {{ errors.district[0] }}
      </span>
    </div>

    <div class="form-group">
      <button class="btn btn-primary">Kirim</button>
    </div>
  </form>
</template>

<script>
  export default {
    name: 'FormComponent',

    data() {
      return {
        alert: {},
        errors: [],
        state: {
          province: '',
          city: '',
          district: ''
        },
        provinces: [],
        cities: [],
        districts: []
      }
    },

    mounted() {
      // get all provinces data
      axios.get('/location/province').then(response => {
        this.provinces = response.data;
      }).catch(error => console.error(error));
    },

    methods: {
      submit(e) {
        this.errors = [];
        this.alert = {};

        axios.post(e.target.action, this.state).then(response => {
          if (response.data.status) {
            this.alert = {
              type: 'success',
              message: response.data.message
            }

            this.errors = [];
          }
        }).catch(error => {
          if (error) {
            if (error.response.status == 422) {
              this.errors = error.response.data;
            }
          }
        });
      },

      province() {
        this.state.city = '';

        // set params
        const params = {
          province: this.state.province
        }

        // url /location/city?province=xxx
        axios.get('/location/city', {params}).then(response => {
          this.cities = response.data;
        }).catch(error => console.error(error));
      },

      city() {
        this.state.district = '';

        // set params
        const params = {
          city: this.state.city
        };

        axios.get('/location/district', {params}).then(response => {
          this.districts = response.data;
        }).catch(error => console.error(error));
      }
    }
  }
</script>