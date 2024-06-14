import { createApp, h } from 'vue'
import { Head, Link, createInertiaApp } from '@inertiajs/vue3'
import Layout from './Shared/Layout.vue'
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue',{eager:true})
    let page = pages[`./Pages/${name}.vue`]
    if(page.default.layout === undefined){
        page.default.layout = page.default.layout || Layout
    }
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .component("Head",Head)
      .component("Link",Link)
      .mount(el)
  },
  progress:{
    showSpinner:true,
    color:'cyan',
    includeCSS:true
  },
  title:title => `MyApp - ${title}`,
})
