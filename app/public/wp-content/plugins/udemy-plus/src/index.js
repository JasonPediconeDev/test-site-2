import { registerBlockType } from '@wordpress/blocks';
import block from './block.json'

console.log("test")

registerBlockType(block.name, {
    edit() {
        return <p>Hello world!</p>
    }
})