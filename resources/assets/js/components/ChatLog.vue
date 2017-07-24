<template lang="html">

	<div class="chat-log">
		<chat-message v-for="message in messages" :message="message" :key="message.id"></chat-message>  
		<!--calls the component "chat-message"-->
		<!--check message.id for errors-->

		<div class="empty" v-show="messages.length === 0">
			Empty Space
		</div>

	</div>

</template>

<script>
export default {
	//will pull from the messages property in root app.js
	props: ['messages'] 
}

</script>

<style lang="css">
	.chat-log .chat-message:nth-child(even) {
		background-color: #ccc;
	}

	.empty {
		padding: 1rem;
		text-align: center;
	}
	
</style>