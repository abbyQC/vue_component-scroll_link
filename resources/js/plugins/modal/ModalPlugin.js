import Component from "./Component";
let Plugin ={
    install: function(Vue, options={}){
        Vue.component('modal',Component)
    }
};
export default  Plugin;
