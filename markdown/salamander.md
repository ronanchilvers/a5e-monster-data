---
statblock: true
name: 'Salamander - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Elemental
cr: 6
ac: 15
hp: 90
hit_dice: '12d10 + 24'
speed: '30 ft.'
stats:
    - 18
    - 14
    - 14
    - 10
    - 10
    - 12
damage_resistances: 'damage from nonmagical weapons'
damage_immunities: fire
saves:
    constitution: 5
    wisdom: 3
senses: 'darkvision 60 ft., passive Perception 10'
languages: Ignan
traits:
    - { name: 'Heated Body', desc: "A creature that starts its turn grappled by the salamander, touches it, or hits it with a melee attack while within 5 feet takes 7 (2d6) fire damage. A creature can take this damage only once per turn. If the salamander has taken cold damage since the end of its last turn, this trait doesn't function." }
actions:
    - { name: Multiattack, desc: 'The salamander makes a tail attack and a pike attack.' }
    - { name: Tail, desc: "Melee Weapon Attack: +7 to hit, reach 10 ft., one target. Hit: 9 (2d4 + 4) bludgeoning damage, the target is subjected to the salamander's Heated Body trait, and the target is grappled (escape DC 15). Until this grapple ends, the target is restrained, the salamander automatically hits the target with its tail attack, and the salamander can't attack a different target with its tail." }
    - { name: Pike, desc: 'Melee Weapon Attack: +7 to hit, reach 10 ft., one target. Hit: 15 (2d10 + 4) piercing damage plus 3 (1d6) fire damage.' }
combat:
    - { name: 'The salamander attacks the same opponent with its tail and pike', desc: 'It retreats if it takes cold damage while bloodied. Salamanders move about the battlefield without regard for opportunity attacks, trusting their heated bodies to punish foes.' }

---
```statblock
monster: Salamander - A5E
```
