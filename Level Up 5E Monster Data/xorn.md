---
statblock: true
name: 'Xorn - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Elemental
cr: 5
ac: 19
hp: 73
hit_dice: '7d8 + 42'
speed: '20 ft., burrow 20 ft.'
stats:
    - 18
    - 10
    - 22
    - 10
    - 10
    - 10
damage_resistances: 'acid; damage from nonmagical, non-adamantine weapons'
skillsaves:
    - { perception: 3 }
    - { stealth: 3 }
senses: 'darkvision 60 ft., tremorsense 60 ft., passive Perception 16'
languages: Terran
traits:
    - { name: Camouflage, desc: 'The xorn has advantage on Stealth checks made to hide in rocky terrain.' }
    - { name: 'Earth Glide', desc: 'The xorn can burrow through nonmagical, unworked earth and stone without disturbing it.' }
    - { name: 'Treasure Sense', desc: 'The xorn can locate by smell coins and gems within 500 feet.' }
actions:
    - { name: Multiattack, desc: 'The xorn makes three claw attacks and then makes a bite attack if it can.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 8 (1d8 + 4) slashing damage.' }
    - { name: Bite, desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one creature that was hit by the xorn's claws at least twice this turn. Hit: 13 (2d8 + 4) piercing damage, and the xorn consumes one of the following nonmagical objects in the target's possession: a worn set of metal armor or a carried metal weapon or shield, a piece of metal equipment, a gem, or up to 1,000 coins. For 1 minute after an item is consumed, a creature can retrieve it from the gullet of a willing, incapacitated, or dead xorn, taking 7 (2d6) acid damage in the process." }
combat:
    - { name: 'The xorn targets creatures wearing metal armor or carrying coins or gems', desc: "After attacking, it burrows to safety, risking opportunity attacks, and then emerges to attack again on its next turn. It flees if it's bloodied and has consumed at least one item." }

---
```statblock
monster: Xorn - A5E
```
