<template>
  <div class="map-list">
    <Accordion>
      <AccordionTab header="Название темы">
        Content
      </AccordionTab>
      <AccordionTab header="Название темы">
        Content
      </AccordionTab>
      <AccordionTab header="Название темы">
        Content
      </AccordionTab>
      <AccordionTab header="Название темы">
        Content
      </AccordionTab>
      <AccordionTab header="Название темы">
        Content
      </AccordionTab>
    </Accordion>
  </div>
</template>

<script>
export default {
  name: "MapComponent"
}
</script>

<style lang="scss" scoped>
.map-list {
  display: flex;
  flex-direction: column;
  width: 335px;
  gap: 20px;
}
</style>