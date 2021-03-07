panel.plugin("preya/kirby-accordion-block", {
  blocks: {
    accordion: `
      <div @dblclick="open">
          <details class="k-block-type-accordion" open>
            <summary>{{ content.summary }}</summary>
            <p v-html="content.details"></p>
          </details>
      </div>
    `,
  },
});
