<template>
  <div id="wrapper">

    <!-- 网页整体为左右结构 左边sidebar组件 -->
    <sidebar></sidebar>

    <!-- 右侧为导航栏和主题内容区域 需要navbar组件 -->
    <div id="page-content-wrapper">
      <navbar></navbar>
      <div class="container-fluid">
        <router-view></router-view>
      </div>
    </div>

  </div>
</template>

<script>
  // export default 是ES6新特性还是?
  export default {

  }
</script>


<style lang="scss">
  // 加上scoped只针对当前template内的样式,而非全局
  


</style>

