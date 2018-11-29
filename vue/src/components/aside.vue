<template>
  <div class="aside">
    <el-menu
      default-active="2"
      class="el-menu-vertical-demo"
      @open="handleOpen"
      @close="handleClose"
      background-color="#99ccff"
      text-color="#333"
      active-text-color="white">
      <el-submenu index="1">
        <template slot="title">
          <i class="el-icon-library-tushu"></i>
          <span>图书管理</span>
        </template>
        <el-menu-item-group class="elgroup">
          <el-menu-item index="1-1">图书类型管理</el-menu-item>
          <el-menu-item index="1-2">图书逾期管理</el-menu-item>
          <el-menu-item index="1-3">图书档案管理</el-menu-item>
        </el-menu-item-group>
      </el-submenu>
      <el-submenu index="2">
        <template slot="title">
          <i class="el-icon-library-people"></i>
          <span>读者管理</span>
        </template>
        <el-menu-item-group class="elgroup">
          <el-menu-item index="2-1">读者类型管理</el-menu-item>
          <el-menu-item index="2-2">读者档案管理</el-menu-item>
        </el-menu-item-group>
      </el-submenu>
      <el-submenu index="3">
        <template slot="title">
          <i class="el-icon-library-jiezhengshenqing"></i>
          <span>图书借还</span>
        </template>
        <el-menu-item-group class="elgroup">
          <el-menu-item index="3-1">图书借阅</el-menu-item>
          <el-menu-item index="3-2">图书归还</el-menu-item>
        </el-menu-item-group>
      </el-submenu>
      <el-submenu index="4">
        <template slot="title">
          <i class="el-icon-library-tubiaozhizuomobanyihuifu-"></i>
          <span>系统管理</span>
        </template>
        <el-menu-item-group class="elgroup">
          <el-menu-item index="4-1">图书档案查询</el-menu-item>
          <el-menu-item index="4-2">图书借阅查询</el-menu-item>
        </el-menu-item-group>
      </el-submenu>
      <el-submenu index="5">
        <template slot="title">
          <i class="el-icon-library-paixingbang"></i>
          <span>排行榜</span>
        </template>
        <el-menu-item-group class="elgroup">
          <el-menu-item index="5-1">图书借阅排行榜</el-menu-item>
          <el-menu-item index="5-2">读者借阅排行榜</el-menu-item>
        </el-menu-item-group>
      </el-submenu>
      <el-submenu index="6">
        <template slot="title">
          <i class="el-icon-library-shezhi"></i>
          <span>系统设置</span>
        </template>
        <el-menu-item-group class="elgroup">
          <el-menu-item index="6-1">图书馆信息</el-menu-item>
          <el-menu-item index="6-2">管理员设置</el-menu-item>
          <el-menu-item index="6-3">书架管理</el-menu-item>
        </el-menu-item-group>
      </el-submenu>
    </el-menu>
  </div>
</template>

<script>
export default {
  name: 'aside'
}
</script>

<style scoped>
  @import '../assets/icon/iconfont.css';
  .el-menu-vertical-demo:not(.el-menu--collapse) {
    width: 200px;
    min-height: 400px;
  }
  .elgroup{
    margin-top: -10px;
    text-align: center;
  }
</style>
