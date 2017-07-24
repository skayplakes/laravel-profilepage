import VueRouter from 'vue-router'


//to define the path of the content
let routes = [
	{
		path:'/',
		component: require('./components/Example')

	},
	{
		path:'/about',
		component: require('./components/About')
	},
	{
		path:'/blog',
		component: require('./components/blog')
	} 
];

export default new VueRouter({
	routes
});