/*
 * CSS Class Suggest
 */

import { __ } from "@wordpress/i18n";
import { BaseControl, FormTokenField } from "@wordpress/components";
import { InspectorAdvancedControls } from "@wordpress/block-editor";
import { hasBlockSupport } from "@wordpress/blocks";
import { Fragment } from "@wordpress/element";
import { createHigherOrderComponent } from "@wordpress/compose";
import { addFilter } from "@wordpress/hooks";

export const withInspectorControl = createHigherOrderComponent((BlockEdit) => {
  return (props) => {
    const hasCustomClassName = hasBlockSupport(
      props.name,
      "customClassName",
      true
    );

    if (hasCustomClassName && props.isSelected) {
      const { className } = props.attributes;

      return (
        <Fragment>
          <BlockEdit {...props} />
          <InspectorAdvancedControls>
            <BaseControl className="qtb-classname-control">
              <FormTokenField
                label={"[S] " + __("Additional CSS class(es)")}
                value={
                  className && className.trim()
                    ? className.trim().split(/\s+/)
                    : []
                }
                suggestions={qtbSuggestions}
                onChange={(value) =>
                  props.setAttributes({
                    className: value.length ? value.join(" ") : undefined,
                  })
                }
              />
            </BaseControl>
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
  withInspectorControl,
  9
);
