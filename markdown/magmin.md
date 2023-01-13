---
statblock: true
name: 'Magmin - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Elemental
cr: 1
ac: 14
hp: 14
hit_dice: 4d6
speed: '30 ft.'
stats:
    - 8
    - 14
    - 10
    - 8
    - 10
    - 10
damage_resistances: 'damage from nonmagical weapons'
damage_immunities: 'cold, fire'
senses: 'passive Perception 10'
languages: Ignan
traits:
    - { name: 'Blazing Blood', desc: "When the magmin takes damage that doesn't kill it, or when it is subjected to fire damage, its magma shell cracks and it is set ablaze. While ablaze, the magmin sheds bright light for 10 feet and dim light for an additional 10 feet. If the magmin is subjected to cold damage while ablaze, this flame is extinguished. The magmin can also set itself ablaze or extinguish itself as an action." }
    - { name: 'Death Burst', desc: 'If the magmin dies while ablaze, it explodes in a burst of magma. Each creature within 10 feet makes a DC 11 Dexterity saving throw, taking 7 (2d6) fire damage on a failed save. Unattended flammable objects in the area are ignited.' }
    - { name: 'Elemental Nature', desc: "A magmin doesn't require air, sustenance, or sleep." }
actions:
    - { name: Touch, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) fire damage. If the magmin is ablaze and the target is a creature, it suffers 5 (1d10) ongoing fire damage until a creature takes an action to extinguish the flame on the target.' }
    - { name: 'Spurt Magma (Ablaze Only)', desc: 'Ranged Weapon Attack: +5 to hit, range 30 ft., one target. Hit: 5 (1d6 + 2) fire damage.' }
combat:
    - { name: 'A MAGMIN WITH AN INTACT SHELL TRIES TO AVOID COMBAT', desc: "WHILE ABLAZE, IT SETS ENEMIES ON FIRE WITH ITS TOUCH, USING SPURT MAGMA WHEN IT CAN'T REACH MELEE RANGE." }

---
```statblock
monster: Magmin - A5E
```
