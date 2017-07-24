<template lang="html">
	<div class="chat-message">
	<!-- calls the data properties in chat-log -->
		<p>{{ message.message }}</p>
		<small>{{ message.user.name }}</small> 

	</div>


	
</template>

<script>
export default {
	props: ['message']

}

</script>

<style lang="css">
	.chat-message {
		padding: 1rem;
	}

	.chat-message > p {
		margin-bottom: .5rem;
	}
	
</style>