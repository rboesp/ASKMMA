<template>
  <div class="w-full">
    <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
      <div class="menubar w-full flex justify-end">

        <button
          class="menubar__button"
          :class="{ 'text-white bg-black': isActive.bullet_list() }"
          @click="commands.bullet_list"
        >
          <span class="font-semibold border px-4 py-1">bullets</span>
        </button>

        <button
          class="menubar__button"
          @click="commands.undo"
        >
          <span class="font-semibold border px-4 py-1">undo</span>
        </button>

        <button
          class="menubar__button"
          @click="commands.redo"
        >
          <span class="font-semibold border px-4 py-1">redo</span>
        </button>

      </div>
    </editor-menu-bar>

    <editor-content class="editor__content w-full border mt-6" :editor="editor" @blur="contentEmit" />
  </div>
</template>

<script>
  import { Editor, EditorContent, EditorMenuBar } from 'tiptap'
  import {
    Blockquote,
    CodeBlock,
    HardBreak,
    Heading,
    HorizontalRule,
    OrderedList,
    BulletList,
    ListItem,
    TodoItem,
    TodoList,
    Bold,
    Code,
    Italic,
    Link,
    Strike,
    Underline,
    History,
  } from 'tiptap-extensions'
  export default {
    name: 'TextEditor',
    props: {
      value: {
        type: String,
        default: ''
      },
    },
    components: {
      EditorContent,
      EditorMenuBar,
    },
    data() {
      return {
        editor: new Editor({
          extensions: [
            new Blockquote(),
            new BulletList(),
            new CodeBlock(),
            new HardBreak(),
            new Heading({ levels: [1, 2, 3] }),
            new HorizontalRule(),
            new ListItem(),
            new OrderedList(),
            new TodoItem(),
            new TodoList(),
            new Link(),
            new Bold(),
            new Code(),
            new Italic(),
            new Strike(),
            new Underline(),
            new History(),
          ],
          onUpdate: ({ getHTML }) => {
            this.html = getHTML()
          },
          onBlur: () => {
            this.contentEmit()
          },
        }),
        html: ''
      }
    },
    methods: {
      contentEmit(){
        this.$emit('input', this.html)
      },
      setContent(data) {
        this.editor.setContent(data)
        this.editor.focus()
      }
    },
    beforeDestroy() {
      this.editor.destroy()
    },
    created() {
      this.setContent(this.value)
    }
  }
</script>

<style scoped></style>