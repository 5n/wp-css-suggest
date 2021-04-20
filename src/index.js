/*
 * Tailwind className Suggestions
 */

import { __ } from "@wordpress/i18n";
import { FormTokenField } from "@wordpress/components";
import { InspectorAdvancedControls } from "@wordpress/block-editor";
import { hasBlockSupport } from "@wordpress/blocks";
import { Fragment } from "@wordpress/element";
import { createHigherOrderComponent } from "@wordpress/compose";
import { addFilter } from "@wordpress/hooks";
import { useSelect } from "@wordpress/data";

export const withInspectorControl = createHigherOrderComponent((BlockEdit) => {
	return (props) => {
		const hasCustomClassName = hasBlockSupport(
			props.name,
			"customClassName",
			true
		);

		if (hasCustomClassName && props.isSelected) {
			const { className } = props.attributes;

			const classNameArray = className ? className.trim().split(/\s+/) : [];

			const qtbSuggestions = useSelect(
				(select) => select("core/editor").getEditorSettings().qtbSuggestions,
				[]
			);

			return (
				<Fragment>
					<BlockEdit {...props} />
					<InspectorAdvancedControls>
						<FormTokenField
							label={__("Tailwind CSS class")}
							value={classNameArray}
							suggestions={qtbSuggestions}
							onChange={(value) =>
								props.setAttributes({
									className: value.length ? value.join(" ") : undefined,
								})
							}
						/>
					</InspectorAdvancedControls>
				</Fragment>
			);
		}

		return <BlockEdit {...props} />;
	};
}, "withInspectorControl");

addFilter(
	"editor.BlockEdit",
	"plugin/qtb/with-inspector-control",
	withInspectorControl
);
