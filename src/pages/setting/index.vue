<template>
  <vue-helmet :title='title' v-ref:head></vue-helmet>
  <div class="wrapper" id="setting">
    <main class="main main-footer">
      <group>
        <cell title="账号与安全" v-link="{name: 'account'}" is-link></cell>
      </group>
      <group>
        <cell title="新消息通知" v-link="{name: 'notification'}" is-link></cell>
        <cell title="隐私" v-link="{name: 'privacy'}" is-link></cell>
        <cell title="通用" v-link="{name: 'general'}" is-link></cell>
      </group>
      <group>
        <cell title="关于微信" is-link></cell>
      </group>
      <group>
        <cell class="text-center" title="退出登录"></cell>
      </group>
    </main>
  </div>
</template>

<style lang="scss" scoped>
@import "../../assets/styles/pages/setting.scss";
</style>

<script>
import Group from 'vux-components/group';
import Cell from 'vux-components/cell';

export default {
  ready() {
  },
  head: {
    title: {
      inner: '设置',
    },
  },
  components: {
    Group,
    Cell,
  },
};
</script>
