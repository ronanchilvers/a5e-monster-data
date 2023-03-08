---
statblock: true
name: Roc
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Beast
cr: 13
ac: 15
hp: 232
hit_dice: '15d20 + 75'
speed: '20 ft., fly 120 ft.'
stats:
    - 28
    - 10
    - 20
    - 3
    - 12
    - 8
saves:
    - { dexterity: 5 }
    - { constitution: 10 }
    - { wisdom: 6 }
    - { charisma: 4 }
skillsaves:
    - { perception: 6 }
senses: 'passive Perception 16'
traits:
    - { name: 'Keen Sight', desc: 'The roc has advantage on Perception checks that rely on sight.' }
    - { name: 'Siege Monster', desc: 'The roc deals double damage to objects and structures.' }
actions:
    - { name: Multiattack, desc: 'The roc attacks once with its beak and once with its talons, or makes a beak attack and drops a grappled creature or held object.' }
    - { name: Beak, desc: 'Melee Weapon Attack: +14 to hit, reach 10 ft., one target. Hit: 23 (4d6+9) piercing damage.' }
    - { name: Talons, desc: "Melee Weapon Attack: +14 to hit, reach 5 ft., one target. Hit: 23 (4d6+9) slashing damage, and the target is grappled (escape DC 22). Until this grapple ends, the target is restrained, and the roc can't attack a different target with its talons." }
reactions:
    - { name: 'Retributive Strike', desc: 'When a creature the roc can see hits it with a melee weapon attack, the roc makes a beak attack against its attacker.' }

---
```statblock
monster: Roc
```
