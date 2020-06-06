<template>
  <div class="dropdown relative">
    <div
      class="dropdown-trigger"
      @click.prevent="isOpen = ! isOpen"
      aria-haspopup="true"
      :aria-expanded="isOpen"
    >
      <slot name="trigger"></slot>
    </div>
    <transition name="pop-out-quick">
      <ul v-show="isOpen" class="absoulte bg-black mt-2 px-3 py-2 rounded shadow text-white z-10">
        <slot></slot>
      </ul>
    </transition>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isOpen: false
    };
  },
  watch: {
    isOpen(isOpen) {
      if (isOpen) {
        document.addEventListener("click", this.closeIfClickedOutside);
      }
    }
  },
  method: {
    closeIfClickedOutside() {
      if (!event.target.closest(".dropdown")) {
        this.isOpen = false;
      }
    }
  }
};
</script>
<style>
.pop-out-quick-enter-active,
.pop-out-quick-leave-active {
  transition: all 0.4s;
}
.pop-out-quick-enter,
.pop-out-quick-leave-active {
  opacity: 0;
  transform: translate(-7px);
}
</style>