import{u as c,o as s,g as o,a as i,b as u,w as p,F as d,H as _,d as e,s as g,t as l}from"./app.653daad3.js";import{A as m}from"./AuthenticatedLayout.ffc30f4a.js";import{_ as f}from"./_plugin-vue_export-helper.cdc0426e.js";const h={class:"py-12"},b={class:"max-w-7xl mx-auto sm:px-6 lg:px-8"},w={class:"bg-white overflow-hidden shadow-sm sm:rounded-lg"},v={class:"p-6 bg-white border-b border-gray-200"},x={class:"grid grid-cols-1 gap-4"},y={class:"vip_group"},k={class:"heading"},L=e("h1",{class:"text-center text-xl font-bold"},"My Referrals",-1),R={class:"text-center mt-5 mb-5"},C={props:{refs:Array,auth:Object},methods:{async copyURL(){let r=window.location.origin+"/register?refferer="+this.auth.user.name;navigator.clipboard.writeText(r).then(()=>{alert("Link Copied")}).catch(()=>{alert("something went wrong")})}}},A=Object.assign(C,{__name:"Refs",setup(r){return c({amount:"",address:""}),(a,n)=>(s(),o(d,null,[i(u(_),{title:"Home"}),i(m,null,{default:p(()=>[e("div",h,[e("div",b,[e("div",w,[e("div",v,[e("div",x,[e("div",y,[e("div",k,[L,e("div",R,[e("button",{onClick:n[0]||(n[0]=t=>a.copyURL()),class:"inline-flex items-center px-4 py-2 bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150"},"Copy my refferal link")]),(s(!0),o(d,null,g(a.$page.props.refs,t=>(s(),o("h2",null,l(t.name)+" ("+l(t.email)+") ",1))),256))])])])])])])])]),_:1})],64))}}),H=f(A,[["__file","/var/www/laravel/Click-App/resources/js/Pages/Refs.vue"]]);export{H as default};