---
statblock: true
name: 'Shadow Demon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fiend
cr: 4
ac: 13
hp: 45
hit_dice: 10d8
speed: '30 ft., fly 50 ft.'
stats:
    - 5
    - 16
    - 10
    - 12
    - 14
    - 16
damage_resistances: 'acid, fire, thunder; damage from nonmagical weapons'
damage_immunities: 'cold, lightning, necrotic, poison'
condition_immunities: 'charmed, fatigue, grappled, paralyzed, petrified, poisoned, prone, restrained'
'damage vulenrabilities': radiant
saves:
    dexterity: 5
    constitution: 2
    charisma: 5
skillsaves:
    stealth: 5
senses: 'darkvision 120 ft., passive Perception 12'
languages: 'Abyssal, telepathy 120 ft.'
traits:
    - { name: 'Chaotic Evil', desc: 'The demon radiates a Chaotic and Evil aura.' }
    - { name: Incorporeal, desc: 'The demon can move through creatures and objects. It takes 3 (1d6) force damage if it ends its turn inside an object.' }
    - { name: 'Light Sensitivity', desc: 'While in bright light, the demon has disadvantage on attack rolls, as well as on Perception checks that rely on sight.' }
actions:
    - { name: 'Darken Light', desc: 'The demon magically targets a nonmagical flame or an area of magical light created by a 2nd-level or lower spell slot within 60 feet. Any area of bright light created by the light source instead casts dim light for 10 minutes.' }
    - { name: 'Replace Shadow', desc: "The demon targets a humanoid within 5 feet that is in dim light and can't see the demon. The target makes a DC 13 Constitution saving throw. On a success, the target is aware of the demon. On a failure, the target is unaware of the demon, the target no longer casts a natural shadow, and the demon magically takes on the shape of the target's shadow, appearing indistinguishable from a natural shadow except when it attacks. The demon shares the target's space and moves with the target. When the demon is dealt damage while sharing the target's space, it takes half the damage (rounded down) and the other half is dealt to the target. The effect ends when the target drops to 0 hit points, the demon no longer shares the target's space, the demon or target is affected by dispel evil and good or a similar effect, or the demon begins its turn in an area of sunlight." }
    - { name: Claws, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 14 (2d10 + 3) cold damage.' }
'bonus actions':
    - { name: 'Shadow Sneak', desc: 'The demon takes the Hide action even if obscured only by dim light or darkness.' }
combat:
    - { name: 'The shadow demon uses Darken Light to create areas of dim light and Shadow Sneak to hide in plain sight', desc: "It then uses Replace Shadow. Once it has done so, it may use its claws immediately, or it may travel with its victim for some time before it attacks. If it's unable to use Replace Shadow, it tries to attack from hiding. It flees if dealt radiant damage." }

---
```statblock
monster: Shadow Demon - A5E
```
