---
statblock: true
name: 'Cave Ogre - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Giant
cr: 2
ac: 12
hp: 119
hit_dice: '14d10 + 42'
speed: '40 ft.'
stats:
    - 19
    - 8
    - 16
    - 10
    - 10
    - 8
senses: 'darkvision 60 ft., passive Perception 10'
languages: 'Common, Giant'
traits:
    - { name: 'Elite Recovery', desc: 'At the end of each of its turns while bloodied, the ogre can end one condition or effect on itself. It can do this even when unconscious or incapacitated.' }
actions:
    0: { name: Greatclub, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 13 (2d8 + 4) bludgeoning damage, and if the target is a Medium or smaller creature, it makes a DC 14 Strength saving throw, falling prone on a failure.' }
    1: { name: 'Sweeping Strike', desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., all creatures within 5 feet. Hit: 8 (1d8 + 4) bludgeoning damage, and if the target is a Medium or smaller creature, it makes a DC 14 Strength saving throw. On a failure, it is pushed 10 feet away from the ogre.' }
    2: { name: Javelin, desc: 'Melee or Ranged Weapon Attack: +6 to hit, reach 5 ft. or range 30/120 ft., one target. Hit: 11 (2d6 + 4) piercing damage.' }
    actions: ['The cave ogre has the following additional action, which it can use only while bloodied:']
    3: { name: Rock, desc: 'Ranged Weapon Attack: +6 to hit, range 30/120 ft., one target. Hit: 14 (3d6 + 4) bludgeoning damage, and if the target is a Medium or smaller creature, it makes a DC 14 Strength saving throw, falling prone on a failure.' }
reactions:
    reactions: ['The ogre has the following reactions, which it can use only while bloodied:']
    0: { name: 'Reflexive Swat', desc: 'When a creature the ogre can see within 5 feet hits it with a melee attack, the ogre makes a greatclub attack against it.' }
    1: { name: 'Furious Smash (1/Day)', desc: 'When it takes damage or is targeted by a spell, the cave ogre roars and smashes the ground, a tree, or another object, sending debris flying in a 30-foot radius around the ogre. Each creature in the area makes a DC 14 Dexterity saving throw, taking 10 (3d6) bludgeoning damage on a failed save or half damage on a success. Until the debris is cleared, the area becomes difficult terrain, which the cave ogre ignores.' }

---
```statblock
monster: Cave Ogre - A5E
```
