<?php if( have_rows('sidebar') ): ?>
  <div class="4u 12u(mobile)" id="sidebar">
    <?php while( have_rows('sidebar') ): the_row(); ?>
      <p><?php if(get_sub_field('text_1')): the_sub_field('text_1'); endif; ?></p>
    <?php endwhile; endif; ?>
  <!--<p>
    "Ik ben geboren in Den Haag en getogen in Leiden, in de Vogelbuurt. Het was tijdens en vlak na de oorlog; mijn ouders hadden het ondanks hard werken niet breed. Ik tekende graag en een buurjongen, Arie Kroon, vroeg me eens een portret na te tekenen van Johann Sebastian Bach."
  </p>
  <p>
    "We leerden elkaar kennen, trouwden en verhuisden al gauw naar Woubrugge. Arie had altijd 'een plan' en dit was fase één. Fase twee was het bouwen van een eigen huis; die fase volgde eigenlijk al snel."
  </p>
  <p>"Het was een enorm drukke tijd. We hadden al drie kinderen, Hans, Evelien en Rutger toen we eraan begonnen en ik was zwanger van Annelies. Er was altijd wel wat te doen aan en rondom het huis. Het was soms rommelig maar tegelijktijd waren we trots op wat we opbouwden. En er was toch ook wel tijd voor andere dingen, het verenigingsleven, m.n. kerk, school, m'n koor... Nu heb ik lekker veel tijd en die andere dingen doe ik ook nog wel, maar voor de rest draait het om schilderen."
  </p>
  <p>"De plannen van Arie creëerden ook ruimte en tijd om m'n eigen dingen te doen. Ik ondersteunde, had veel aandacht voor de kinderen, maar deed ook de administratie en ander kantoorwerk. Het was best een baan. Maar ik geloofde er ook in, het was leuk. We creëerden iets dat nog niet bestond; sommige mensen vonden dat raar, maar de meesten waren vooral geïnteresseerd."</p>-->
</div>
