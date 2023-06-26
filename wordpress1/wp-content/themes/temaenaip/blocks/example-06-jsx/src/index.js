import { registerBlockType } from "@wordpress/blocks";
import { useBlockProps, BlockControls, InspectorControls } from "@wordpress/block-editor";
import { ToolbarGroup, ToolbarButton, Button  } from "@wordpress/components";


import json from "../block.json";
const { name } = json;

registerBlockType(name, {
    attributes: {
        alignright: {
            type: "boolean",
            default: false
        }
    },
    edit: (props) => {
        const blockProps = useBlockProps({
            className: "custom-p"
        });

        const onClickAlignButton = () => {
            props.setAttributes({
                alignright: !props.attributes.alignright
            })
        }

        return <>
            <BlockControls key = 'controls'>
                <ToolbarGroup>
                    <ToolbarButton
                        icon = "edit"
                        label = "Bottone"
                        isPressed = { props.attributes.alignright }
                        onClick= { onClickAlignButton }
                    ></ToolbarButton>
                </ToolbarGroup>
            </BlockControls>
            <InspectorControls 
            key = "settings" group="settings"
            >
            </InspectorControls>
            <InspectorControls
             key = "style" group="style">
                <Button>Ciao</Button>
            </InspectorControls>

            <p {...blockProps}>Lorem ipsum dolor sit amet</p>;
        </>    
    },
    save: (props) => {
        const blockProps = useBlockProps.save({
            className: "custom-p",
            "data-align" : props.attributes.alignright
        });
        return <>
 
        <p {...blockProps} style= {  (props.attributes.alignright) ?"text-align: right" : "text-align: left"}>et consectur adiscipling adit.</p>;
        </>
    }
});