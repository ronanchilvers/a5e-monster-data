---
statblock: true
name: Flumph
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Aberration
cr: 1
ac: 12
hp: 7
hit_dice: 2d6
speed: '5 ft., fly 30 ft., swim 30 ft.'
stats:
    - 6
    - 14
    - 10
    - 14
    - 14
    - 10
'damage vulenrabilities': psychic
senses: 'darkvision 60 ft., passive Perception 12'
languages: "understands Common and Undercommon but can't speak, telepathy 60 ft."
traits:
    - { name: Amphibious, desc: 'The flumph can breathe air and water.' }
    - { name: 'Flumph Light', desc: 'As a bonus action, the flumph can cast dim light for 30 feet, or extinguish its glow. The flumph can change the color of the light it casts at will.' }
    - { name: 'Telepathic Spy', desc: "The flumph can perceive any telepathic messages sent or received within 60 feet, and can't be surprised by creatures with telepathy. The flumph is also immune to divination and to any effect that would sense its emotions or read its thoughts, except for the Telepathic Spy feature of another flumph." }
    - { name: Tippable, desc: 'If a flumph is knocked prone, it lands upside down and is incapacitated. At the end of each of its turns, it can make a DC 10 Dexterity saving throw, flipping itself over and ending the incapacitated condition on a success.' }
actions:
    - { name: Tendrils, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 1 piercing damage plus 3 (1d6) acid damage.' }
    - { name: 'Stench Spray (1/Day)', desc: 'Each creature in a 15-foot cone makes a DC 10 Dexterity saving throw. On a failure, the creature exudes a horrible stench for 1 hour. While a creature exudes this stench, it and any creature within 5 feet of it are poisoned. A creature can remove the stench on itself by bathing during a rest.' }
combat:
    - { name: 'When threatened, flumphs use their Stench Spray and flee', desc: 'They attack with their tendrils only when cornered.' }

---
```statblock
monster: Flumph
```
