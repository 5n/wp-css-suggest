<?php
/**
 * Tailwind CSS Classes
 */

function add_qtb_classes($classes) {
  $tailwind = [];

  /**
   * Layout
   */
  // Container: https://tailwindcss.com/docs/container
  $tailwind['container'] = [
    'container',
  ];

  // Box Decoration Break: https://tailwindcss.com/docs/box-decoration-break
  $tailwind['boxdecorationbreak'] = [
    'decoration-slice',
    'decoration-clone',
  ];

  // Box Sizing: https://tailwindcss.com/docs/box-sizing
  $tailwind['boxsizing'] = [
    'box-border',
    'box-content',
  ];

  // Display: https://tailwindcss.com/docs/display
  $tailwind['display'] = [
    'block',
    'inline-block',
    'inline',
    'flex',
    'inline-flex',
    'table',
    'inline-table',
    'table-caption',
    'table-cell',
    'table-column',
    'table-column-group',
    'table-footer-group',
    'table-header-group',
    'table-row-group',
    'table-row',
    'flow-root',
    'grid',
    'inline-grid',
    'contents',
    'list-item',
    'hidden',
  ];

  // Floats: https://tailwindcss.com/docs/float
  $tailwind['float'] = [
    'float-right',
    'float-left',
    'float-none',
  ];

  // Clear: https://tailwindcss.com/docs/clear
  $tailwind['clear'] = [
    'clear-left',
    'clear-right',
    'clear-both',
    'clear-none',
  ];

  // Isolation: https://tailwindcss.com/docs/isolation
  $tailwind['isolation'] = [
    'isolate',
    'isolation-auto',
  ];

  // Object Fit: https://tailwindcss.com/docs/object-fit
  $tailwind['objectfit'] = [
    'object-contain',
    'object-cover',
    'object-fill',
    'object-none',
    'object-scale-down',
  ];

  // Object Position: https://tailwindcss.com/docs/object-position
  $tailwind['objectposition'] = [
    'object-bottom',
    'object-center',
    'object-left',
    'object-left-bottom',
    'object-left-top',
    'object-right',
    'object-right-bottom',
    'object-right-top',
    'object-top',
  ];

  // Overflow: https://tailwindcss.com/docs/overflow
  $tailwind['overflow'] = [
    'overflow-auto',
    'overflow-hidden',
    'overflow-visible',
    'overflow-scroll',
    'overflow-x-auto',
    'overflow-y-auto',
    'overflow-x-hidden',
    'overflow-y-hidden',
    'overflow-x-visible',
    'overflow-y-visible',
    'overflow-x-scroll',
    'overflow-y-scroll',
  ];

  // Overscroll Behavior: https://tailwindcss.com/docs/overscroll-behavior
  $tailwind['overscrollbehavior'] = [
    'overscroll-auto',
    'overscroll-contain',
    'overscroll-none',
    'overscroll-y-auto',
    'overscroll-y-contain',
    'overscroll-y-none',
    'overscroll-x-auto',
    'overscroll-x-contain',
    'overscroll-x-none',
  ];

  // Position: https://tailwindcss.com/docs/position
  $tailwind['position'] = [
    'static',
    'fixed',
    'absolute',
    'relative',
    'sticky',
  ];

  // Top / Right / Bottom / Left: https://tailwindcss.com/docs/top-right-bottom-left
  foreach (['', '-'] as $symbol) {
    foreach (['inset', 'inset-x', 'inset-y', 'top', 'right', 'bottom', 'left'] as $position) {
      foreach (['0', '0.5', '1', '1.5', '2', '2.5', '3', '3.5', '4', '5', '6', '7', '8', '9', '10', '11', '12', '14', '16', '20', '24', '28', '32', '36', '40', '44', '48', '52', '56', '60', '64', '72', '80', '96', 'px', '1/2', '1/3', '2/3', '1/4', '2/4', '3/4', 'full'] as $size) {
        $tailwind['inset'][] = $symbol.$position.'-'.$size;
      }

      if ($symbol === '') {
        $tailwind['inset'][] = $position.'-auto';
      }
    }
  }

  // Visibility: https://tailwindcss.com/docs/visibility
  $tailwind['visibility'] = [
    'visible',
    'invisible',
  ];

  // Z-Index: https://tailwindcss.com/docs/z-index
  $tailwind['zindex'] = [
    'z-0',
    'z-10',
    'z-20',
    'z-30',
    'z-40',
    'z-50',
    'z-auto',
  ];

  /**
   * Flexbox
   */
  // Flex Direction: https://tailwindcss.com/docs/flex-direction
  $tailwind['flexdirection'] = [
    'flex-row',
    'flex-row-reverse',
    'flex-col',
    'flex-col-reverse',
  ];

  // Flex Wrap: https://tailwindcss.com/docs/flex-wrap
  $tailwind['flexwrap'] = [
    'flex-wrap',
    'flex-wrap-reverse',
    'flex-nowrap',
  ];

  // Flex: https://tailwindcss.com/docs/flex
  $tailwind['flex'] = [
    'flex-1',
    'flex-auto',
    'flex-initial',
    'flex-none',
  ];

  // Flex Grow: https://tailwindcss.com/docs/flex-grow
  $tailwind['flexgrow'] = [
    'flex-grow-0',
    'flex-grow',
  ];

  // Flex Shrink: https://tailwindcss.com/docs/flex-shrink
  $tailwind['flexshrink'] = [
    'flex-shrink-0',
    'flex-shrink',
  ];

  // Order: https://tailwindcss.com/docs/order
  $tailwind['order'] = [
    'order-1',
    'order-2',
    'order-3',
    'order-4',
    'order-5',
    'order-6',
    'order-7',
    'order-8',
    'order-9',
    'order-10',
    'order-11',
    'order-12',
    'order-first',
    'order-last',
    'order-none',
  ];

  // Order: https://tailwindcss.com/docs/order
  $tailwind['order'] = [
    'order-1',
    'order-2',
    'order-3',
    'order-4',
    'order-5',
    'order-6',
    'order-7',
    'order-8',
    'order-9',
    'order-10',
    'order-11',
    'order-12',
    'order-first',
    'order-last',
    'order-none',
  ];

  /**
   * Grid
   */
  // Grid Template Columns: https://tailwindcss.com/docs/grid-template-columns
  $tailwind['gridtemplatecolumns'] = [
    'grid-cols-1',
    'grid-cols-2',
    'grid-cols-3',
    'grid-cols-4',
    'grid-cols-5',
    'grid-cols-6',
    'grid-cols-7',
    'grid-cols-8',
    'grid-cols-9',
    'grid-cols-10',
    'grid-cols-11',
    'grid-cols-12',
    'grid-cols-none',
  ];

  // Grid Column Start / End: https://tailwindcss.com/docs/grid-column
  foreach (['span', 'start', 'end'] as $element) {
    foreach (['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'] as $size) {
      $tailwind['gridcolumn'][] = 'col-'.$element.'-'.$size;
    }
  }
  $tailwind['gridcolumn'] = [
    ...$tailwind['gridcolumn'],
    'col-auto',
    'col-span-full',
    'col-start-13',
    'col-start-auto',
    'col-end-13',
    'col-end-auto',
  ];

  // Grid Template Rows: https://tailwindcss.com/docs/grid-template-rows
  $tailwind['gridtemplaterows'] = [
    'grid-rows-1',
    'grid-rows-2',
    'grid-rows-3',
    'grid-rows-4',
    'grid-rows-5',
    'grid-rows-6',
    'grid-rows-none',
  ];

  // Grid Row Start / End: https://tailwindcss.com/docs/grid-row
  foreach (['span', 'start', 'end'] as $element) {
    foreach (['1', '2', '3', '4', '5', '6'] as $size) {
      $tailwind['gridrow'][] = 'row-'.$element.'-'.$size;
    }
  }
  $tailwind['gridrow'] = [
    ...$tailwind['gridrow'],
    'row-auto',
    'row-span-full',
    'row-start-7',
    'row-start-auto',
    'row-end-7',
    'row-end-auto',
  ];

  // Grid Auto Flow: https://tailwindcss.com/docs/grid-auto-flow
  $tailwind['gridautoflow'] = [
    'grid-flow-row',
    'grid-flow-col',
    'grid-flow-row-dense',
    'grid-flow-col-dense',
  ];

  // Grid Auto Columns: https://tailwindcss.com/docs/grid-auto-columns
  $tailwind['gridautocolumns'] = [
    'auto-cols-auto',
    'auto-cols-min',
    'auto-cols-max',
    'auto-cols-fr',
  ];

  // Grid Auto Rows: https://tailwindcss.com/docs/grid-auto-rows
  $tailwind['gridautorows'] = [
    'auto-rows-auto',
    'auto-rows-min',
    'auto-rows-max',
    'auto-rows-fr',
  ];

  // Gap: https://tailwindcss.com/docs/gap
  foreach (['gap', 'gap-x', 'gap-y'] as $gap) {
    foreach (['0', '0.5', '1', '1.5', '2', '2.5', '3', '3.5', '4', '5', '6', '7', '8', '9', '10', '11', '12', '14', '16', '20', '24', '28', '32', '36', '40', '44', '48', '52', '56', '60', '64', '72', '80', '96', 'px'] as $size) {
      $tailwind['gap'][] = $gap.'-'.$size;
    }
  }

  /**
   * Box Alignment
   */
  // Justify Content: https://tailwindcss.com/docs/justify-content
  $tailwind['justifycontent'] = [
    'justify-start',
    'justify-end',
    'justify-center',
    'justify-between',
    'justify-around',
    'justify-evenly',
  ];

  // Justify Items: https://tailwindcss.com/docs/justify-items
  $tailwind['justifyitems'] = [
    'justify-items-start',
    'justify-items-end',
    'justify-items-center',
    'justify-items-stretch',
  ];

  // Justify Self: https://tailwindcss.com/docs/justify-self
  $tailwind['justifyself'] = [
    'justify-self-auto',
    'justify-self-start',
    'justify-self-end',
    'justify-self-center',
    'justify-self-stretch',
  ];

  // Align Content: https://tailwindcss.com/docs/align-content
  $tailwind['aligncontent'] = [
    'content-center',
    'content-start',
    'content-end',
    'content-between',
    'content-around',
    'content-evenly',
  ];

  // Align Items: https://tailwindcss.com/docs/align-items
  $tailwind['alignitems'] = [
    'items-start',
    'items-end',
    'items-center',
    'items-baseline',
    'items-stretch',
  ];

  // Align Self: https://tailwindcss.com/docs/align-self
  $tailwind['alignself'] = [
    'self-auto',
    'self-start',
    'self-end',
    'self-center',
    'self-stretch',
  ];

  // Place Content: https://tailwindcss.com/docs/place-content
  $tailwind['placecontent'] = [
    'place-content-center',
    'place-content-start',
    'place-content-end',
    'place-content-between',
    'place-content-around',
    'place-content-evenly',
    'place-content-stretch',
  ];

  // Place Items: https://tailwindcss.com/docs/place-items
  $tailwind['placeitems'] = [
    'place-items-start',
    'place-items-end',
    'place-items-center',
    'place-items-stretch',
  ];

  // Place Self: https://tailwindcss.com/docs/place-self
  $tailwind['placeself'] = [
    'place-self-auto',
    'place-self-start',
    'place-self-end',
    'place-self-center',
    'place-self-stretch',
  ];

  /**
   * Spacing
   */
  // Padding: https://tailwindcss.com/docs/padding
  foreach (['p', 'px', 'py', 'pt', 'pr', 'pb', 'pl'] as $element) {
    foreach (['0', '0.5', '1', '1.5', '2', '2.5', '3', '3.5', '4', '5', '6', '7', '8', '9', '10', '11', '12', '14', '16', '20', '24', '28', '32', '36', '40', '44', '48', '52', '56', '60', '64', '72', '80', '96', 'px'] as $size) {
      $tailwind['padding'][] = $element.'-'.$size;
    }
  }

  // Margin: https://tailwindcss.com/docs/margin
  foreach (['', '-'] as $symbol) {
    foreach (['m', 'mx', 'my', 'mt', 'mr', 'mb', 'ml'] as $element) {
      foreach (['0', '0.5', '1', '1.5', '2', '2.5', '3', '3.5', '4', '5', '6', '7', '8', '9', '10', '11', '12', '14', '16', '20', '24', '28', '32', '36', '40', '44', '48', '52', '56', '60', '64', '72', '80', '96', 'px'] as $size) {
        $tailwind['margin'][] = $symbol.$element.'-'.$size;
      }

      if ($symbol === '') {
        $tailwind['margin'][] = $element.'-auto';
      }
    }
  }

  // Space Between: https://tailwindcss.com/docs/space
  foreach (['', '-'] as $symbol) {
    foreach (['space-y', 'space-x'] as $element) {
      foreach (['0', '0.5', '1', '1.5', '2', '2.5', '3', '3.5', '4', '5', '6', '7', '8', '9', '10', '11', '12', '14', '16', '20', '24', '28', '32', '36', '40', '44', '48', '52', '56', '60', '64', '72', '80', '96', 'px'] as $size) {
        $tailwind['space'][] = $symbol.$element.'-'.$size;
      }

      if ($symbol === '') {
        $tailwind['space'][] = $element.'-reverse';
      }
    }
  }

  /**
   * Sizing
   */
  // Width: https://tailwindcss.com/docs/width
  $tailwind['width'] = [
    'w-0',
    'w-0.5',
    'w-1',
    'w-1.5',
    'w-2',
    'w-2.5',
    'w-3',
    'w-3.5',
    'w-4',
    'w-5',
    'w-6',
    'w-7',
    'w-8',
    'w-9',
    'w-10',
    'w-11',
    'w-12',
    'w-14',
    'w-16',
    'w-20',
    'w-24',
    'w-28',
    'w-32',
    'w-36',
    'w-40',
    'w-44',
    'w-48',
    'w-52',
    'w-56',
    'w-60',
    'w-64',
    'w-72',
    'w-80',
    'w-96',
    'w-auto',
    'w-px',
    'w-1/2',
    'w-1/3',
    'w-2/3',
    'w-1/4',
    'w-2/4',
    'w-3/4',
    'w-1/5',
    'w-2/5',
    'w-3/5',
    'w-4/5',
    'w-1/6',
    'w-2/6',
    'w-3/6',
    'w-4/6',
    'w-5/6',
    'w-1/12',
    'w-2/12',
    'w-3/12',
    'w-4/12',
    'w-5/12',
    'w-6/12',
    'w-7/12',
    'w-8/12',
    'w-9/12',
    'w-10/12',
    'w-11/12',
    'w-full',
    'w-screen',
    'w-min',
    'w-max',
  ];

  // Min-Width: https://tailwindcss.com/docs/min-width
  $tailwind['minwidth'] = [
    'min-w-0',
    'min-w-full',
    'min-w-min',
    'min-w-max',
  ];

  // Max-Width: https://tailwindcss.com/docs/max-width
  $tailwind['maxwidth'] = [
    'max-w-0',
    'max-w-none',
    'max-w-xs',
    'max-w-sm',
    'max-w-md',
    'max-w-lg',
    'max-w-xl',
    'max-w-2xl',
    'max-w-3xl',
    'max-w-4xl',
    'max-w-5xl',
    'max-w-6xl',
    'max-w-7xl',
    'max-w-full',
    'max-w-min',
    'max-w-max',
    'max-w-prose',
    'max-w-screen-sm',
    'max-w-screen-md',
    'max-w-screen-lg',
    'max-w-screen-xl',
    'max-w-screen-2xl',
  ];

  // Height: https://tailwindcss.com/docs/height
  $tailwind['height'] = [
    'h-0',
    'h-0.5',
    'h-1',
    'h-1.5',
    'h-2',
    'h-2.5',
    'h-3',
    'h-3.5',
    'h-4',
    'h-5',
    'h-6',
    'h-7',
    'h-8',
    'h-9',
    'h-10',
    'h-11',
    'h-12',
    'h-14',
    'h-16',
    'h-20',
    'h-24',
    'h-28',
    'h-32',
    'h-36',
    'h-40',
    'h-44',
    'h-48',
    'h-52',
    'h-56',
    'h-60',
    'h-64',
    'h-72',
    'h-80',
    'h-96',
    'h-auto',
    'h-px',
    'h-1/2',
    'h-1/3',
    'h-2/3',
    'h-1/4',
    'h-2/4',
    'h-3/4',
    'h-1/5',
    'h-2/5',
    'h-3/5',
    'h-4/5',
    'h-1/6',
    'h-2/6',
    'h-3/6',
    'h-4/6',
    'h-5/6',
    'h-full',
    'h-screen',
  ];

  // Min-Height: https://tailwindcss.com/docs/min-height
  $tailwind['minheight'] = [
    'min-h-0',
    'min-h-full',
    'min-h-screen',
  ];

  // Max-Height: https://tailwindcss.com/docs/max-height
  $tailwind['maxheight'] = [
    'max-h-0',
    'max-h-0.5',
    'max-h-1',
    'max-h-1.5',
    'max-h-2',
    'max-h-2.5',
    'max-h-3',
    'max-h-3.5',
    'max-h-4',
    'max-h-5',
    'max-h-6',
    'max-h-7',
    'max-h-8',
    'max-h-9',
    'max-h-10',
    'max-h-11',
    'max-h-12',
    'max-h-14',
    'max-h-16',
    'max-h-20',
    'max-h-24',
    'max-h-28',
    'max-h-32',
    'max-h-36',
    'max-h-40',
    'max-h-44',
    'max-h-48',
    'max-h-52',
    'max-h-56',
    'max-h-60',
    'max-h-64',
    'max-h-72',
    'max-h-80',
    'max-h-96',
    'max-h-px',
    'max-h-full',
    'max-h-screen',
  ];

  /**
   * Typography
   */
  // Font Size: https://tailwindcss.com/docs/font-size
  $tailwind['fontsize'] = [
    'text-xs',
    'font-sm',
    'font-base',
    'font-lg',
    'font-xl',
    'font-2xl',
    'font-3xl',
    'font-4xl',
    'font-5xl',
    'font-6xl',
    'font-7xl',
    'font-8xl',
    'font-9xl',
  ];

  // Font Smoothing: https://tailwindcss.com/docs/font-smoothing
  $tailwind['fontsmoothing'] = [
    'antialiased',
    'subpixel-antialiased',
  ];

  // Font Style: https://tailwindcss.com/docs/font-style
  $tailwind['fontstyle'] = [
    'italic',
    'not-italic',
  ];

  // Font Weight: https://tailwindcss.com/docs/font-weight
  $tailwind['fontweight'] = [
    'font-thin',
    'font-extralight',
    'font-light',
    'font-normal',
    'font-medium',
    'font-semibold',
    'font-bold',
    'font-extrabold',
    'font-black',
  ];

  // Font Variant Numeric: https://tailwindcss.com/docs/font-variant-numeric
  $tailwind['fontvariantnumeric'] = [
    'normal-nums',
    'ordinal',
    'slashed-zero',
    'lining-nums',
    'oldstyle-nums',
    'proportional-nums',
    'tabular-nums',
    'diagonal-fractions',
    'stacked-fractions',
  ];

  // Letter Spacing: https://tailwindcss.com/docs/letter-spacing
  $tailwind['letterspacing'] = [
    'tracking-tighter',
    'tracking-tight',
    'tracking-normal',
    'tracking-wide',
    'tracking-wider',
    'tracking-widest',
  ];

  // Line Height: https://tailwindcss.com/docs/line-height
  $tailwind['lineheight'] = [
    'leading-3',
    'leading-4',
    'leading-5',
    'leading-6',
    'leading-7',
    'leading-8',
    'leading-9',
    'leading-10',
    'leading-none',
    'leading-tight',
    'leading-snug',
    'leading-normal',
    'leading-relaxed',
    'leading-loose',
  ];

  // List Style Type: https://tailwindcss.com/docs/list-style-type
  $tailwind['liststyletype'] = [
    'list-none',
    'list-disc',
    'list-decimal',
  ];

  // List Style Position: https://tailwindcss.com/docs/list-style-position
  $tailwind['liststyleposition'] = [
    'list-inside',
    'list-outside',
  ];

  // Placeholder Color: https://tailwindcss.com/docs/placeholder-color
  $tailwind['placeholdercolor'] = qtb_tailwind_color('placeholder');

  // Placeholder Opacity: https://tailwindcss.com/docs/placeholder-opacity
  $tailwind['placeholderopacity'] = [
    'placeholder-opacity-0',
    'placeholder-opacity-5',
    'placeholder-opacity-10',
    'placeholder-opacity-20',
    'placeholder-opacity-25',
    'placeholder-opacity-30',
    'placeholder-opacity-40',
    'placeholder-opacity-50',
    'placeholder-opacity-60',
    'placeholder-opacity-70',
    'placeholder-opacity-75',
    'placeholder-opacity-80',
    'placeholder-opacity-90',
    'placeholder-opacity-95',
    'placeholder-opacity-100',
  ];

  // Text Alignment: https://tailwindcss.com/docs/text-align
  $tailwind['textalign'] = [
    'text-left',
    'text-center',
    'text-right',
    'text-justify',
  ];

  // Text Color: https://tailwindcss.com/docs/text-color
  $tailwind['textcolor'] = qtb_tailwind_color('text');

  // Text Opacity: https://tailwindcss.com/docs/text-opacity
  $tailwind['textopacity'] = [
    'text-opacity-0',
    'text-opacity-5',
    'text-opacity-10',
    'text-opacity-20',
    'text-opacity-25',
    'text-opacity-30',
    'text-opacity-40',
    'text-opacity-50',
    'text-opacity-60',
    'text-opacity-70',
    'text-opacity-75',
    'text-opacity-80',
    'text-opacity-90',
    'text-opacity-95',
    'text-opacity-100',
  ];

  // Text Decoration: https://tailwindcss.com/docs/text-decoration
  $tailwind['textdecoration'] = [
    'underline',
    'line-through',
    'no-underline',
  ];

  // Text Transform: https://tailwindcss.com/docs/text-transform
  $tailwind['texttransform'] = [
    'uppercase',
    'lowercase',
    'capitalize',
    'normal-case',
  ];

  // Text Overflow: https://tailwindcss.com/docs/text-overflow
  $tailwind['textoverflow'] = [
    'truncate',
    'overflow-ellipsis',
    'overflow-clip',
  ];

  // Vertical Alignment: https://tailwindcss.com/docs/vertical-align
  $tailwind['verticalalign'] = [
    'align-baseline',
    'align-top',
    'align-middle',
    'align-bottom',
    'align-text-top',
    'align-text-bottom',
  ];

  // Whitespace: https://tailwindcss.com/docs/whitespace
  $tailwind['whitespace'] = [
    'whitespace-normal',
    'whitespace-nowrap',
    'whitespace-pre',
    'whitespace-pre-line',
    'whitespace-pre-wrap',
  ];

  // Word Break: https://tailwindcss.com/docs/word-break
  $tailwind['wordbreak'] = [
    'break-normal',
    'break-words',
    'break-all',
  ];

  /**
   * Background
   */
  // Background Attachment: https://tailwindcss.com/docs/background-attachment
  $tailwind['backgroundattachment'] = [
    'bg-fixed',
    'bg-local',
    'bg-scroll',
  ];

  // Background Clip: https://tailwindcss.com/docs/background-clip
  $tailwind['backgroundclip'] = [
    'bg-clip-border',
    'bg-clip-padding',
    'bg-clip-content',
    'bg-clip-text',
  ];

  // Background Color: https://tailwindcss.com/docs/background-color
  $tailwind['backgroundcolor'] = qtb_tailwind_color('bg');

  // Background Opacity: https://tailwindcss.com/docs/background-opacity
  $tailwind['backgroundopacity'] = [
    'bg-opacity-0',
    'bg-opacity-5',
    'bg-opacity-10',
    'bg-opacity-20',
    'bg-opacity-25',
    'bg-opacity-30',
    'bg-opacity-40',
    'bg-opacity-50',
    'bg-opacity-60',
    'bg-opacity-70',
    'bg-opacity-75',
    'bg-opacity-80',
    'bg-opacity-90',
    'bg-opacity-95',
    'bg-opacity-100',
  ];

  // Background Position: https://tailwindcss.com/docs/background-position
  $tailwind['backgroundposition'] = [
    'bg-bottom',
    'bg-center',
    'bg-left',
    'bg-left-bottom',
    'bg-left-top',
    'bg-right',
    'bg-right-bottom',
    'bg-right-top',
    'bg-top',
  ];

  // Background Repeat: https://tailwindcss.com/docs/background-repeat
  $tailwind['backgroundrepeat'] = [
    'bg-repeat',
    'bg-no-repeat',
    'bg-repeat-x',
    'bg-repeat-y',
    'bg-repeat-round',
    'bg-repeat-space',
  ];

  // Background Size: https://tailwindcss.com/docs/background-size
  $tailwind['backgroundsize'] = [
    'bg-auto',
    'bg-cover',
    'bg-contain',
  ];

  /**
   * Borders
   */
  // Border Radius: https://tailwindcss.com/docs/border-radius
  foreach (['', '-t', '-r', '-b', '-l', '-tl', '-tr', '-br', '-bl'] as $position) {
    foreach (['', '-none', '-sm', '-md', '-lg', '-xl', '-2xl', '-3xl', '-full'] as $size) {
      $tailwind['borderradius'][] = 'rounded'.$position.$size;
    }
  }

  // Border Width: https://tailwindcss.com/docs/border-width
  foreach (['', '-t', '-r', '-b', '-l'] as $position) {
    foreach (['', '-0', '-2', '-4', '-8'] as $size) {
      $tailwind['borderwidth'][] = 'border'.$position.$size;
    }
  }

  // Border Color: https://tailwindcss.com/docs/border-color
  $tailwind['bordercolor'] = qtb_tailwind_color('border');

  // Border Opacity: https://tailwindcss.com/docs/border-opacity
  $tailwind['borderopacity'] = [
    'border-opacity-0',
    'border-opacity-5',
    'border-opacity-10',
    'border-opacity-20',
    'border-opacity-25',
    'border-opacity-30',
    'border-opacity-40',
    'border-opacity-50',
    'border-opacity-60',
    'border-opacity-70',
    'border-opacity-75',
    'border-opacity-80',
    'border-opacity-90',
    'border-opacity-95',
    'border-opacity-100',
  ];

  // Border Style: https://tailwindcss.com/docs/border-style
  $tailwind['borderstyle'] = [
    'border-solid',
    'border-dashed',
    'border-dotted',
    'border-double',
    'border-none',
  ];

  // Divide Width: https://tailwindcss.com/docs/divide-width
  foreach (['x', 'y'] as $position) {
    foreach (['', '-0', '-2', '-4', '-8', '-reverse'] as $size) {
      $tailwind['dividewidth'][] = 'divide-'.$position.$size;
    }
  }

  // Divide Color: https://tailwindcss.com/docs/divide-color
  $tailwind['dividecolor'] = qtb_tailwind_color('divide');

  // Divide Style: https://tailwindcss.com/docs/divide-style
  $tailwind['dividestyle'] = [
    'divide-solid',
    'divide-dashed',
    'divide-dotted',
    'divide-double',
    'divide-none',
  ];

  /**
   * Effects
   */
  // Box Shadow: https://tailwindcss.com/docs/box-shadow
  $tailwind['boxshadow'] = [
    'shadow-sm',
    'shadow',
    'shadow-md',
    'shadow-lg',
    'shadow-xl',
    'shadow-2xl',
    'shadow-inner',
    'shadow-none',
  ];

  // Opacity: https://tailwindcss.com/docs/opacity
  $tailwind['opacity'] = [
    'opacity-0',
    'opacity-5',
    'opacity-10',
    'opacity-20',
    'opacity-25',
    'opacity-30',
    'opacity-40',
    'opacity-50',
    'opacity-60',
    'opacity-70',
    'opacity-75',
    'opacity-80',
    'opacity-90',
    'opacity-95',
    'opacity-100',
  ];

  /**
   * Filters
   */
  // Filter: https://tailwindcss.com/docs/filter
  $tailwind['filter'] = [
    'filter',
    'filter-none',
  ];

  // Blur: https://tailwindcss.com/docs/blur
  $tailwind['blur'] = [
    'blur-0',
    'blur-sm',
    'blur',
    'blur-md',
    'blur-lg',
    'blur-xl',
    'blur-2xl',
    'blur-3xl',
  ];

  // Brightness: https://tailwindcss.com/docs/brightness
  $tailwind['brightness'] = [
    'brightness-0',
    'brightness-50',
    'brightness-75',
    'brightness-90',
    'brightness-95',
    'brightness-100',
    'brightness-105',
    'brightness-110',
    'brightness-125',
    'brightness-150',
    'brightness-200',
  ];

  // Contrast: https://tailwindcss.com/docs/contrast
  $tailwind['contrast'] = [
    'contrast-0',
    'contrast-50',
    'contrast-75',
    'contrast-100',
    'contrast-125',
    'contrast-150',
    'contrast-200',
  ];

  // Drop Shadow: https://tailwindcss.com/docs/drop-shadow
  $tailwind['dropshadow'] = [
    'drop-shadow-sm',
    'drop-shadow',
    'drop-shadow-md',
    'drop-shadow-lg',
    'drop-shadow-xl',
    'drop-shadow-2xl',
    'drop-shadow-none',
  ];

  // Grayscale: https://tailwindcss.com/docs/grayscale
  $tailwind['grayscale'] = [
    'grayscale-0',
    'grayscale',
  ];

  // Hue Rotate: https://tailwindcss.com/docs/hue-rotate
  $tailwind['huerotate'] = [
    '-hue-rotate-180',
    '-hue-rotate-90',
    '-hue-rotate-60',
    '-hue-rotate-30',
    '-hue-rotate-15',
    'hue-rotate-0',
    'hue-rotate-15',
    'hue-rotate-30',
    'hue-rotate-60',
    'hue-rotate-90',
    'hue-rotate-180',
  ];

  // Invert: https://tailwindcss.com/docs/invert
  $tailwind['invert'] = [
    'invert-0',
    'invert',
  ];

  // Saturate: https://tailwindcss.com/docs/saturate
  $tailwind['saturate'] = [
    'saturate-0',
    'saturate-50',
    'saturate-100',
    'saturate-150',
    'saturate-200',
  ];

  // Sepia: https://tailwindcss.com/docs/sepia
  $tailwind['sepia'] = [
    'sepia-0',
    'sepia',
  ];

  // Backdrop Filter: https://tailwindcss.com/docs/backdrop-filter
  $tailwind['backdropfilter'] = [
    'backdrop-filter',
    'backdrop-filter-none',
  ];

  // Backdrop Blur: https://tailwindcss.com/docs/backdrop-blur
  $tailwind['backdropblur'] = [
    'backdrop-blur-0',
    'backdrop-blur-sm',
    'backdrop-blur',
    'backdrop-blur-md',
    'backdrop-blur-lg',
    'backdrop-blur-xl',
    'backdrop-blur-2xl',
    'backdrop-blur-3xl',
  ];

  // Backdrop Brightness: https://tailwindcss.com/docs/backdrop-brightness
  $tailwind['backdropbrightness'] = [
    'backdrop-brightness-0',
    'backdrop-brightness-50',
    'backdrop-brightness-75',
    'backdrop-brightness-90',
    'backdrop-brightness-95',
    'backdrop-brightness-100',
    'backdrop-brightness-105',
    'backdrop-brightness-110',
    'backdrop-brightness-125',
    'backdrop-brightness-150',
    'backdrop-brightness-200',
  ];

  // Backdrop Contrast: https://tailwindcss.com/docs/backdrop-contrast
  $tailwind['backdropcontrast'] = [
    'backdrop-contrast-0',
    'backdrop-contrast-50',
    'backdrop-contrast-75',
    'backdrop-contrast-100',
    'backdrop-contrast-125',
    'backdrop-contrast-150',
    'backdrop-contrast-200',
  ];

  // Backdrop Grayscale: https://tailwindcss.com/docs/backdrop-grayscale
  $tailwind['backdropgrayscale'] = [
    'backdrop-grayscale-0',
    'backdrop-grayscale',
  ];

  // Backdrop Hue Rotate: https://tailwindcss.com/docs/backdrop-hue-rotate
  $tailwind['backdrophuerotate'] = [
    '-backdrop-hue-rotate-180',
    '-backdrop-hue-rotate-90',
    '-backdrop-hue-rotate-60',
    '-backdrop-hue-rotate-30',
    '-backdrop-hue-rotate-15',
    'backdrop-hue-rotate-0',
    'backdrop-hue-rotate-15',
    'backdrop-hue-rotate-30',
    'backdrop-hue-rotate-60',
    'backdrop-hue-rotate-90',
    'backdrop-hue-rotate-180',
  ];

  // Backdrop Invert: https://tailwindcss.com/docs/backdrop-invert
  $tailwind['backdropinvert'] = [
    'backdrop-invert-0',
    'backdrop-invert',
  ];

  // Backdrop Opacity: https://tailwindcss.com/docs/backdrop-opacity
  $tailwind['backdropopacity'] = [
    'backdrop-opacity-0',
    'backdrop-opacity-5',
    'backdrop-opacity-10',
    'backdrop-opacity-20',
    'backdrop-opacity-25',
    'backdrop-opacity-30',
    'backdrop-opacity-40',
    'backdrop-opacity-50',
    'backdrop-opacity-60',
    'backdrop-opacity-70',
    'backdrop-opacity-75',
    'backdrop-opacity-80',
    'backdrop-opacity-90',
    'backdrop-opacity-95',
    'backdrop-opacity-100',
  ];

  // Backdrop Saturate: https://tailwindcss.com/docs/backdrop-saturate
  $tailwind['backdropsaturate'] = [
    'backdrop-saturate-0',
    'backdrop-saturate-50',
    'backdrop-saturate-100',
    'backdrop-saturate-150',
    'backdrop-saturate-200',
  ];

  // Backdrop Sepia: https://tailwindcss.com/docs/backdrop-sepia
  $tailwind['backdropsepia'] = [
    'backdrop-sepia-0',
    'backdrop-sepia',
  ];

  /**
   * Transitions and Animation
   */
  // Transition Property: https://tailwindcss.com/docs/transition-property
  $tailwind['transitionproperty'] = [
    'transition-none',
    'transition-all',
    'transition',
    'transition-colors',
    'transition-opacity',
    'transition-shadow',
    'transition-transform',
  ];

  // Transition Duration: https://tailwindcss.com/docs/transition-duration
  $tailwind['transitionduration'] = [
    'duration-75',
    'duration-100',
    'duration-150',
    'duration-200',
    'duration-300',
    'duration-500',
    'duration-700',
    'duration-1000',
  ];

  // Transition Timing Function: https://tailwindcss.com/docs/transition-timing-function
  $tailwind['transitiontimingfunction'] = [
    'ease-linear',
    'ease-in',
    'ease-out',
    'ease-in-out',
  ];

  // Transition Delay: https://tailwindcss.com/docs/transition-delay
  $tailwind['transitiondelay'] = [
    'delay-75',
    'delay-100',
    'delay-150',
    'delay-200',
    'delay-300',
    'delay-500',
    'delay-700',
    'delay-1000',
  ];

  // Animation: https://tailwindcss.com/docs/animation
  $tailwind['animation'] = [
    'animate-none',
    'animate-spin',
    'animate-ping',
    'animate-pulse',
    'animate-bounce',
  ];

  /**
   * Transforms
   */
  // Transform: https://tailwindcss.com/docs/transform
  $tailwind['transform'] = [
    'transform',
    'transform-gpu',
    'transform-none',
  ];

  // Transform Origin: https://tailwindcss.com/docs/transform-origin
  $tailwind['transformorigin'] = [
    'origin-center',
    'origin-top',
    'origin-top-right',
    'origin-right',
    'origin-bottom-right',
    'origin-bottom',
    'origin-bottom-left',
    'origin-left',
    'origin-top-left',
  ];

  // Scale: https://tailwindcss.com/docs/scale
  foreach (['', '-x', '-y'] as $position) {
    foreach (['0', '50', '75', '90', '95', '100', '105', '110', '125', '150'] as $size) {
      $tailwind['scale'][] = 'scale'.$position.'-'.$size;
    }
  }

  // Rotate: https://tailwindcss.com/docs/rotate
  $tailwind['rotate'] = [
    'rotate-0',
    'rotate-1',
    'rotate-2',
    'rotate-3',
    'rotate-6',
    'rotate-12',
    'rotate-45',
    'rotate-90',
    'rotate-180',
    '-rotate-1',
    '-rotate-2',
    '-rotate-3',
    '-rotate-6',
    '-rotate-12',
    '-rotate-45',
    '-rotate-90',
    '-rotate-180',
  ];

  // Translate: https://tailwindcss.com/docs/translate
  foreach (['', '-'] as $symbol) {
    foreach (['x', 'y'] as $position) {
      foreach (['0', '0.5', '1', '1.5', '2', '2.5', '3', '3.5', '4', '5', '6', '7', '8', '9', '10', '11', '12', '14', '16', '20', '24', '28', '32', '36', '40', '44', '48', '52', '56', '60', '64', '72', '80', '96', 'px', '1/2', '1/3', '2/3', '1/4', '2/4', '3/4', 'full'] as $size) {
        $tailwind['translate'][] = $symbol.'translate-'.$position.'-'.$size;
      }
    }
  }

  // Skew: https://tailwindcss.com/docs/skew
  foreach (['', '-'] as $symbol) {
    foreach (['x', 'y'] as $position) {
      foreach (['1', '2', '3', '6', '12'] as $size) {
        $tailwind['skew'][] = $symbol.'skew-'.$position.'-'.$size;
      }

      if ($symbol === '') {
        $tailwind['skew'][] = 'skew-'.$position.'-0';
      }
    }
  }

  /**
   * Interactivity
   */
  // Appearance: https://tailwindcss.com/docs/appearance
  $tailwind['appearance'] = [
    'appearance-none',
  ];

  // Cursor: https://tailwindcss.com/docs/cursor
  $tailwind['cursor'] = [
    'cursor-auto',
    'cursor-default',
    'cursor-pointer',
    'cursor-wait',
    'cursor-text',
    'cursor-move',
    'cursor-help',
    'cursor-not-allowed',
  ];

  // Outline: https://tailwindcss.com/docs/outline
  $tailwind['outline'] = [
    'outline-none',
    'outline-white',
    'outline-black',
  ];

  // Pointer Events: https://tailwindcss.com/docs/pointer-events
  $tailwind['pointerevents'] = [
    'pointer-events-none',
    'pointer-events-auto',
  ];

  // Resize: https://tailwindcss.com/docs/resize
  $tailwind['resize'] = [
    'resize-none',
    'resize-y',
    'resize-x',
    'resize',
  ];

  // User Select: https://tailwindcss.com/docs/user-select
  $tailwind['userselect'] = [
    'select-none',
    'select-text',
    'select-all',
    'select-auto',
  ];

  /**
   * Accessibility
   */
  // Screen Readers: https://tailwindcss.com/docs/screen-readers
  $tailwind['accessibility'] =  [
    'sr-only',
    'not-sr-only',
  ];

  // Hook for Tailwind's responsive, hover, focus, and more.
  $tailwind = apply_filters('qtb_tailwind_components', $tailwind);

  $tw_classes = [];
  foreach ($tailwind as $component => $list) {
    $tw_classes = [...$tw_classes, ...$list];
  }

  // Tailwind's classes.
  $tw_classes = apply_filters('qtb_tailwind_classes', $tw_classes);

  return [...$classes, ...$tw_classes];
}
add_filter('qtb_class_suggestions', 'add_qtb_classes');

/**
 * Tailwind's color system
 */
function qtb_tailwind_color($property) {
  $classes = [
    $property.'-transparent',
    $property.'-current',
    $property.'-black',
    $property.'-white',
  ];

  foreach (['gray', 'red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'] as $color) {
    foreach (['50', '100', '200', '300', '400', '500', '600', '700', '800', '900'] as $num) {
      $classes[] = $property.'-'.$color.'-'.$num;
    }
  }

  return $classes;
}
