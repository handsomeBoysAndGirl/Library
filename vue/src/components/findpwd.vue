<template>
  <div class="find">
    <el-button>
      <router-link to="/">返回登录</router-link>
    </el-button>
    <hr />
    <div style="margin: 20px;">
      <h4>找回密码</h4>
      <h6>输入姓名和手机号找回密码</h6>
    </div>
    <el-form label-width="80px">
      <el-form-item label="用户名">
        <el-input v-model="name"></el-input>
      </el-form-item>
      <el-form-item label="电话">
        <el-input v-model="tel"></el-input>
      </el-form-item>
      <el-form-item>
       <el-button @click="find">提交</el-button>
      </el-form-item>
    </el-form>
    <el-radio-group size="small">
      <h2>{{msg}}</h2>
    </el-radio-group>
  </div>
</template>

<script>
import axios from 'axios'
import qs from 'qs'
export default {
  name: 'findpwd',
  data () {
    return {
      name: '',
      tel: '',
      msg: ''
    }
  },
  methods: {
    find () {
      let obj = {
        username: this.name,
        tel: this.tel
      }
      axios({
        method: 'post',
        url: 'http://localhost/findpwd',
        data: qs.stringify(obj)
      })
        .then(res => {
          this.msg = res.data
        })
    }
  }
}
</script>

<style scoped>
.find{
  width: 300px;
  margin: 50px auto;
}
h6{
  padding-left: 20px;
  color: #cccccc;
}
</style>
