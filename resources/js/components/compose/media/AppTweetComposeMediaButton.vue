<template>
    <div>
        <input
            type="file"
            :id="id"
            class="hidden"
            multiple
            @change="$emit('selected', $event.target.files)"
        />

        <label :for="id" class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="fill-current text-blue-500 w-6">
                <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 8.59V6H4v6.59l4.3-4.3a1 1 0 0 1 1.4 0l5.3 5.3 2.3-2.3a1 1 0 0 1 1.4 0l1.3 1.3zm0 2.82l-2-2-2.3 2.3a1 1 0 0 1-1.4 0L9 10.4l-5 5V18h16v-2.59zM15 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
        </label>
    </div>
</template>

<script>
export default {
    props: {
        id: {
            required: true,
            type: String
        }
    }
}
</script>
