---
statblock: true
name: 'Horde Demon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fiend
cr: 3
ac: 13
hp: 52
hit_dice: '8d8 + 16'
speed: '40 ft.'
stats:
    - 16
    - 12
    - 14
    - 8
    - 8
    - 8
damage_resistances: 'cold, fire, lightning; damage from nonmagical weapons'
damage_immunities: poison
condition_immunities: poisoned
senses: 'darkvision 120 ft., passive Perception 11'
languages: Abyssal
traits:
    - { name: 'Chaotic Evil', desc: 'The demon radiates a Chaotic and Evil aura.' }
    - { name: 'Radiant Weakness', desc: 'If the demon takes radiant damage while it is bloodied, it is frightened for 1 minute.' }
    - { name: 'Varied Shapes', desc: "Each horde demon has a unique combination of attacks and powers. Roll 1d10 once or twice, rerolling duplicates, or choose one or two features from the following table. A horde demon's features determine the attacks it can make." }
    - { name: '1 Bat Head', desc: 'The demon emits a 15-foot cone of cacophonous sound. Each creature in the area makes a DC 12 Constitution saving throw, taking 7 (2d6) thunder damage on a failed save or half damage on a success.' }
    - { name: '2 Bulging Eyes (Gaze)', desc: 'A creature within 60 feet makes a DC 12 Wisdom saving throw. On a failure, it takes 7 (2d6) psychic damage and is frightened until the end of its next turn.' }
    - { name: '3 Claws', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 12 (2d8 + 3) slashing damage.' }
    - { name: '4 Fangs', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 12 (2d8 + 3) piercing damage.' }
    - { name: '5 Goat Horns', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 10 (2d6 + 3) bludgeoning damage and the target makes a DC 13 Strength saving throw, falling prone on a failure.' }
    - { name: '6 Lamprey Mouth', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 8 (2d4 + 3) piercing damage, and the target is grappled (escape DC 13). Until this grapple ends, the lamprey mouth attack can be used only on this target and automatically hits.' }
    - { name: '7 Porcupine Quills', desc: 'Ranged Weapon Attack: +5 to hit, range 30/60 ft., one target. Hit: 10 (2d6 + 3) piercing damage.' }
    - { name: '8 Scorpion Tail Melee Weapon Attack: +5 to hit, reach 5 ft', desc: ', one target. Hit: 7 (1d8 + 3) piercing damage plus 7 (2d6) poison damage.' }
    - { name: '9 Tentacle Arms Melee Weapon Attack: +5 to hit, reach 15 ft', desc: ', one target. Hit: 8 (2d4 + 3) bludgeoning damage, and the target is grappled (escape DC 13). Until this grapple ends, the tentacle arms attack can only be used on this target.' }
    - { name: '10 Whispering Mouth', desc: "The demon targets a creature within 30 feet that can hear it. The target makes a DC 12 Wisdom saving throw. On a failure, it takes 7 (1d8 + 3) psychic damage and is magically cursed until the start of the demon's next turn. While cursed, the demon's attacks against the target are made with advantage, and the target has disadvantage on saving throws against the demon's Whispering Mouth." }
actions:
    - { name: Multiattack, desc: 'The demon makes two attacks, using any attack granted by its Varied Shapes trait.' }
combat:
    - { name: 'The horde demon uses whatever attacks it possesses', desc: 'It flees only if it suffers the frightened condition.' }

---
```statblock
monster: Horde Demon - A5E
```
