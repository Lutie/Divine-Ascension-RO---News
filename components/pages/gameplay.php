<article id="gameplay">
    <h2 class="major">Gameplay</h2>
    <span class="image main"><img src="images/pic03.jpg" alt="" /></span>

    <div class="info_frame">
        <h3>Skills Reworked</h3>
        <p>Tous les skills du jeu ont été revus et corrigés afin d'ouvrir de nouvelles possibilités et combinaisons. Tout a été mis en oeuvre pour que les meilleurs skills restent les meilleurs mais aussi pour qu'il y ai de nouvelles voies et un meilleur équilibre des classes (dans leurs rôles respectifs).</p>
        <a href="#skills">Voir les modifications</a>
    </div>

    <div class="info_frame">
        <h3>Critical Skills</h3>
        <p>Tous les skills peuvent désormais être critiques !</p>
        <ul>
            <li>They now can be critical, which is based on Critical value and take into account cards that give CRIT vs race, etc...</li>
            <li>Critical resistance drop critical skills rate by litteral % (just like normal critical attacks)</li>
            <li>Perfect Flee drop critical skills rate by a ratio (just like normal critical attacks)</li>
            <li>Most critical misc attack adds more 2/3 damage but this may vary depending on the skill</li>   
            <li>Critical physical attacks inflicts a third more damage, have half more hit rates (non flat bonus) and ignore a third of the target's defense, they still can miss their targets</li>
            <li>Critical magical attacks inflicts a third more damage and ignore a third of the target's defense</li>
            <li>Those skills only get 33% more damage on critical : Falcon Assault, Soul Destroyer, Acid Demonstration, Self Destruction</li>
            <li>Effect that increase critical damage also affect critical skills</li>
            <li>Healing skills can be critical, which increase the value by a third when occured</li>
            <li>Bonus that increase critical damage also increase critical skills damage OR heal (2/3 efficiency)</li>
        <ul>
    </div>

    <div class="info_frame">
        <h3>Misc Attacks</h3>
        <p>Certaines attaques spéciales ont été revues afin d'être plus efficaces, notament voir surtout sur les monstres (comme les pièges).</p>
        <ul>
            <li>Some misc attack add some damage on monsters but this may vary depending on the skill (see modifications on each skills)</li>
        <ul>
    </div>

    <div class="info_frame">
        <h3>Common Status - Global</h3>
        <p>Certaines attaques spéciales ont été revues afin d'être plus efficaces, notament voir surtout sur les monstres (comme les pièges).</p>
        <ul>
            <li>Common status are : Stun, Silence, etc... + burning/chilling/jointbeat/ankle snare/decrease agi</li>
            <li>each point in LUK add/remove 0,33% and 0,2pt to common status rate resistance</li>
            <li>each base level apart add/remove 0,1pt to common status rate resistance</li>
            <li>common status duration based on attribute % is capped at 85%</li>
            <li>each point in LUK add/remove 0,1s to common status duration (applied after attribute % reduction)</li>
            <li>common status can be critical, which is only based on Critical value and don't take account cards that give CRIT vs race, katar bonus, etc</li>
            <li>critical common status ignores 50% of rate all and duration resistances (if those resistances are negative, impliying their behave as penalities, then they are augmented instead)</li>
            <li>each points in LUK give 0,2% resistance to critical common status</li>
            <li>Confusion resistance is based on VIT and STR (instead VIT and INT)</li>
            <li>Common status have now a minimum duration : DOTs (poison, bleeding, burning, venom, toxin) can't last less than 5 seconds, Debuff (silence, blind, confusion, curse) can't last less than 3 seconds and Roots (stun, freeze, stone, sleep) can't last less than 1 seconds</li>
        <ul>
    </div>

    <div class="info_frame">
        <h3>Common Status - DOT reworked</h3>
        <p>Les status de dégats dans le temps ont été modifiés afin de pouvoir être les socles de véritables statégies.</p>
        <ul>
            <li>DOT status are : Poison / DPoison / Bleeding / Burning / Toxin (SC effect)</li>
            <li>DOT status damages are based on those formulas : 2 * (LUK + OFFSTAT + source BaseLV) - 1,5 * (LUK + DEFSTAT + target BaseLV)</li>
            <li>left side of the formula can't be reduce under 50% by the right side</li>
            <li>DOT status add damages based on max HP of the target</li>
            <li>Poison and Dpoison are based on DEX has OFFSTAT and VIT has DEFSTAT (Dpoison deal double damage), VIT of the target can prevent those common status</li>
            <li>Bleeding is based on STR has both OFFSTAT and DEFSTAT, VIT of the target can prevent this common status</li>
            <li>Burning is based on INT has OFFSTAT and AGI has DEFSTAT, MDEF of the target can prevent this common status</li>
            <li>Toxin is based on 1% of the max SP on the target (this is a special case)</li>
            <li>Can kill monsters, do not cease to work if HP are below 25%</li>
            <li>All ticks are fixed at 1s and damage is displayed at each ticks</li>
            <li>If no source is identified for formula calculation then (HIT + LUK + OFFSTAT) is replaced by 250</li>
            <li>DOT's ticks can be critical (don't count vs race cards) and a critical tick adds 50% damage</li>
        <ul>
    </div>

    <div class="info_frame">
        <h3>Common Status - Upgrade</h3>
        <p>Les status de dégats dans le temps ont été modifiés afin de pouvoir être les socles de véritables statégies.</p>
        <ul>
            <li>Silence : No autospell under silence status</li>
            <li>Curse : Reduce ATK, MATK and misc damage by 15%, also reduce STR/INT/DEX by 15%</li>
            <li>Blind : Adds 35% chance to inflict no damage (0) with attacks, can't do critical hits anymore (and critical reduce to 0)</li>
            <li>Confusion : Player attacks itself (instead of targets) and monster have half chance to use skills, 30% chance to stop when hit at full HP but way more chance if not (up to 100%), SP / zeny / ammo / gems requirement/consumption multiplied by 4, Spirits ball requirement/consumption multiplied by 2, attacks to itself litteraly change the target so damage calculation are based on the source (not the target), 50% chance to stop if monster</li>
            <li>Hallucination : 25% chance to attack ifself (instead of targets), more chance to received critical hits and critical hits recieved inflict one third more damage, chance to received critical hits is increased by a fix value (10) and a percentage value (25%), attacks to itself keeps the damage calculation from the initial target</li>
            <li>Sleep : 30% chance to stop when hit at full HP but way more chance if not (up to 100%), 50% chance to stop if monster</li>
            <li>Charm : 30% chance to stop when hit at full HP but way more chance if not (up to 100%), 50% chance to stop if monster</li>
        <ul>
    </div>

    <div class="info_frame">
        <h3>Bonus - Cap values</h3>
        <p>Certains bonus ont désormais des limites douces et dures qui poussent les joueurs à bien réfléchir la façon dont ils s'équipent.</p>
        <ul>
            <li>All bonus behond the soft cap is halved</li>
            <li>All bonus behond the hard cap is halved again</li>
            <li>For the moment those cap are applied to element and race resistance bonus only</li>
        <ul>
    </div>

    <div class="info_frame">
        <h3>Attributes - Overall</h3>
        <p>Les chances de toucher un adversaire ont été modifiées de façon à garantir l'intéret des builds axés sur l'esquive sans toutefois arriver aux extrêmes.</p>
        <ul>
            <li>At hit and flee equivalent the hit rate is 70%</li>
            <li>One's need to have 100 more flee than attacker's hit to reach 100% chance to flee</li>
            <li>One's need to have 100 more hit than defenser's flee to reach 100% chance to hit</li>
            <li>Perfect hit increase the hit rate ratio and perfect flee reduce the hit ratio, even for skills (which was not the case previouly)</li>
        <ul>
    </div>

    <div class="info_frame">
        <h3>Attributes - Overall</h3>
        <p>Certains attributs ont reçus des améliorations afin que tous les attributs soient utiles et garantir une forte diversité des builds possibles.</p>
        <ul>
            <li>Each point in Vitality grants chances to not be interrupted when attacked while casting (Each points grants 0,3%)</li>
            <li>Now affects After Skill Delay : Each points in Agility reduces ASD by 0,25%</li>
            <li>Every damages can be avoided at a rate of 10%, flee increase those odds and Hit reduce it (Ratio is actually Flee/Hit), an avoided attacks can stull deal status etc...</li>
        <ul>
    </div>

    <div class="info_frame">
        <h3>Monster - Global</h3>
        <p>Les monstres ont été modifiés afin de garantir un plus grand challenge et des possibilités de jeu accrues !</p>
        <ul>
            <li>They grants zenys on death : Amount is based on monster's BaseLv</li>
            <li>Boss are not immune to common status anymore (but rate is reduced by 2/3 and duration are reduced by 4/5)</li>
            <li>Boss are not immune to some uncommon status anymore (Blessing (for undead), decrease agi, provoke, strips, fogwall, freezing, burning and toxin)</li>
            <li>Globally speaking lot of elements have been reworked in order to be more balanced and grants more possibilies</li>
        <ul>
    </div>

    <div class="info_frame">
        <h3>Monster - Elits & Classes</h3>
        <p>Les monstres peuvent être élites et avoir des classes qui leurs donnent accés à de nouveaux skills. Le but des classes est de permettre aux joueurs d'observer des patterns et de leurs donner les moyens d'élaborer des stratégies !</p>
        <ul>
            <li>Un monstre élite est plus fort en tout point, il donne également plus d'XP etc</li>
            <li>Il y a plus de 145 classes différentes pour les monstres</li>
            <li>Une classe ajoute plusieurs skills au monstre afin de remplir un objectif ou de lui donner un comportement spécifique</li>
            <li>Les monstres peuvent avoir jusqu'à 5 classes</li>
        <ul>
    </div>

    <div class="info_frame">
        <h3>Monster - Skills</h3>
        <p>Certains skills (exclusif aux monstres ou non) ont été améliorés afin de garantir plus de possibilités et stratégies de jeu.</p>
        <ul>
            <li>Add "cloaking" to mob_skill_db status list</li>
            <li>Blessing now increase monster's ATK/MATK by Lvl * 2% and HIT by LvL * 1%</li>
            <li>Agility Increase now decrease monster's delay and monster's skill cooldown by Lvl * 2% (maximum effects at level 20) and increase FLEE by LvL * 1%</li>
            <li>Pulestrike level 6 and more can't be avoided with the use of safety wall or pneuma</li>
            <li>Summon Monster : If the ID 0 is passed then the monster called will be the same as the user</li>
            <li>Lick : SP damage are now based on skillLv (20 per SkillLv) and user's luck/target's luck (+/- LUK/10 per SkillLv)</li>
            <li>Barrier : Duration is 2s per SkillLv (previously 50+10*SkillLv), classic monsters have it at lvl 5 (10s), reduce damage to 0 (but can't act anymore)</li>
            <li>Keeping : Duration is 3s per SkillLv (previously 50+10*SkillLv), classic monsters have it at lvl 5 (15s), reduce damage by 85% (physical and magical)</li>
            <li>Combo Attack : The multiple hits are real and not only a visual effect, the consequence of this is a longer after hit delay (which is increase by the number of hits) and damage are increased by 30% per hits </li>
            <li>Comet : Damage reduced to be used on pre-re without shame</li>
            <li>Monsters can react to various new statuses (for himself or its target) (crashed, ensnared, cloaking, catching, bleeding, undead, hallucination, spirit, confused, enmeshed (spider web))</li>
        <ul>
    </div>
</article>