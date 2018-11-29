<template>
  <div>
    <el-container>
      <el-header>Header</el-header>
      <el-container>
        <Aside></Aside>
        <el-main>Main</el-main>
      </el-container>
    </el-container>
  </div>
</template>

<script>
import Aside from './aside'
export default {
  name: 'main',
  components: {Aside}
}
</script>

<style scoped>
  .el-header {
    background-color: #336699;
    color: #333;
    text-align: center;
    line-height: 60px;
  }
  .el-aside {
    background-color: #99ccff;
    color: #333;
    text-align: center;
  }
  .el-main {
    background-color: #E9EEF3;
    color: #333;
    text-align: center;
  }
  body > .el-container {
    margin-bottom: 40px;
  }
</style>
