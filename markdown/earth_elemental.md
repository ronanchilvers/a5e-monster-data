---
statblock: true
name: 'Earth Elemental - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Elemental
cr: 5
ac: 17
hp: 114
hit_dice: '12d10 + 48'
speed: '30 ft., burrow 30 ft.'
stats:
    - 18
    - 10
    - 18
    - 6
    - 10
    - 6
damage_resistances: 'damage from nonmagical weapons'
damage_immunities: poison
condition_immunities: 'fatigue, paralyzed, petrified, poisoned, unconscious'
'damage vulenrabilities': thunder
senses: 'darkvision 60 ft., passive Perception 10'
languages: Terran
traits:
    - { name: 'Earth Glide', desc: 'The elemental can burrow through nonmagical, unworked earth and stone without disturbing it.' }
    - { name: 'Siege Monster', desc: 'The elemental deals double damage to objects and structures.' }
    - { name: 'Elemental Nature', desc: "An elemental doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The elemental makes two slam attacks.' }
    - { name: Slam, desc: 'Melee Weapon Attack: +7 to hit, reach 10 ft., one target. Hit: 13 (2d8 + 4) bludgeoning damage.' }
    - { name: "Earth's Embrace", desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one Large or smaller creature. Hit: 17 (2d12 + 4) bludgeoning damage, and the target is grappled (escape DC 15). Until this grapple ends, the elemental can't burrow or use Earth's Embrace and its slam attacks are made with advantage against the grappled target." }
    - { name: Rock, desc: 'Ranged Weapon Attack: +7 to hit, range 30/90 ft., one target. Hit: 15 (2d10 + 4) bludgeoning damage.' }
combat:
    - { name: "The elemental grapples a creature with its Earth's Embrace and then make slam attacks against that creature", desc: "If it can't reach a melee opponent, it burrows to engage a ranged attacker instead. Failing that, it makes a rock attack. Elementals retreat only if ordered to do so." }

---
```statblock
monster: Earth Elemental - A5E
```
