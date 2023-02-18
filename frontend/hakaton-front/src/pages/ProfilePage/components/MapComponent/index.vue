<template>
  <div class="map-list">
    <Accordion>
      <AccordionTab header="Header I">
        Content
      </AccordionTab>
      <AccordionTab header="Header II">
        Content
      </AccordionTab>
      <AccordionTab header="Header III" :disabled="true">
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