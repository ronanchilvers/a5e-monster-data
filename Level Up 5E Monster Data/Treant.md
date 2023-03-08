---
statblock: true
name: Treant
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Plant
cr: 9
ac: 18
hp: 138
hit_dice: '12d12 + 60'
speed: '30 ft.'
stats:
    - 22
    - 8
    - 20
    - 12
    - 20
    - 12
damage_resistances: 'bludgeoning, piercing'
senses: 'darkvision 60 ft., passive Perception 15'
languages: 'Common, Druidic, Elvish, Sylvan'
traits:
    - { name: 'False Appearance', desc: 'While motionless, the treant is indistinguishable from a tree.' }
    - { name: Flammable, desc: 'If the treant takes fire damage, it catches fire, taking 10 (3d6) ongoing fire damage, unless it is already on fire. It can use an action to extinguish itself, ending the ongoing damage.' }
    - { name: 'Forest Speaker', desc: 'The treant can communicate with beasts and plants.' }
    - { name: 'Siege Monster', desc: 'The treant deals double damage to objects and structures.' }
actions:
    - { name: Multiattack, desc: 'The treant makes two attacks, or makes one attack and uses Animate Plant.' }
    - { name: Slam, desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 20 (4d6 + 6) bludgeoning damage.' }
    - { name: Rock, desc: 'Ranged Weapon Attack: +10 to hit, range 60/180 ft., one target. Hit: 15 (2d8 + 6) bludgeoning damage.' }
    - { name: 'Animate Plant', desc: "The treant magically animates a Large or larger plant within 60 feet. The plant is immobile, but it acts on the treant's initiative and can make slam attacks, or rock attacks if there are rocks to throw within 10 feet of it. Non-plant creatures treat the ground within 15 feet of the plant as difficult terrain, as surrounding roots conspire to trip and grasp moving creatures. The plant remains animated for 1 hour. If the treant uses this action while it has three plants animated in this way, the plant that has been animated the longest returns to normal." }

---
```statblock
monster: Treant
```
