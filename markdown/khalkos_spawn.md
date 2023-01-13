---
statblock: true
name: 'Khalkos Spawn - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Tiny
type: Aberration
cr: 2
ac: 16
hp: 27
hit_dice: '6d4 + 12'
speed: '30 ft., fly 30 ft.'
stats:
    - 6
    - 16
    - 14
    - 18
    - 14
    - 12
damage_resistances: 'fire, psychic, radiant'
condition_immunities: charmed
saves:
    intelligence: 5
    wisdom: 4
    charisma: 3
senses: 'darkvision 60 ft., passive Perception 12'
languages: 'telepathy 120 ft.'
traits:
    - { name: 'Detect Alignment', desc: 'The khalkos can detect the presence of creatures within 30 feet that have an alignment trait, and knows the alignment of such creatures.' }
actions:
    - { name: 'Chaos Pheromones', desc: 'The khalkos emits a cloud of pheromones into the air in a 10-foot radius. The cloud spreads around corners. Each non-khalkos creature in the area makes a DC 12 Intelligence saving throw. On a failure, the creature is confused for 1 minute. It repeats the saving throw at the end of each of its turns, ending the effect on itself on a success. If the creature makes its saving throw or the condition ends for it, it is immune to the chaos pheromones of khalkos spawn for the next 24 hours.' }
    - { name: Sting, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one creature. Hit: 5 (1d4 + 3) piercing damage plus 3 (1d6) poison damage.' }
combat:
    - { name: 'The khalkos spawn starts combat by using Chaos Pheromones on clusters of enemies and then stings a creature, preferably one affected by its pheromones', desc: '' }

---
```statblock
monster: Khalkos Spawn - A5E
```
