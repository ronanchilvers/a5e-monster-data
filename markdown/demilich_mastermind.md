---
statblock: true
name: 'Demilich Mastermind - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Tiny
type: Undead
cr: 18
ac: 20
hp: 319
hit_dice: '58d4 + 174'
speed: '0 ft., fly 30 ft. (hover)'
stats:
    - 10
    - 24
    - 16
    - 24
    - 22
    - 20
damage_immunities: 'necrotic, poison, psychic; damage from nonmagical weapons'
condition_immunities: 'charmed, deafened, fatigue, frightened, paralyzed, petrified, poisoned, prone, stunned'
saves:
    strength: 6
    constitution: 9
    intelligence: 13
    wisdom: 12
    charisma: 11
skillsaves:
    arcana: 13
    perception: 12
    stealth: 13
senses: 'truesight 60 ft., passive Perception 22'
languages: "understands the languages it knew in life but doesn't speak"
traits:
    - { name: Avoidance, desc: 'If the demilich makes a saving throw against an effect that deals half damage on a success, it takes no damage on a success and half damage on a failure.' }
    - { name: 'Legendary Resistance (5/Day)', desc: 'If the demilich fails a saving throw, it can choose to succeed instead. When it does so, one of the five tiny warding gems set on its forehead or teeth shatters.' }
    - { name: 'Undead Nature', desc: "A demilich doesn't require air, sustenance, or sleep." }
actions:
    - { name: 'Devour Soul', desc: "The demilich targets one creature within 120 feet, forcing it to make a DC 17 Wisdom saving throw. On a success, or if all the large soul gems on the demilich's skull are occupied, the creature takes 40 necrotic damage, and the demilich regains the same number of hit points. If the target fails its saving throw and there is at least one unoccupied soul gem on the demilich's skull, the demilich regains 40 hit points, and the target dies instantly. Its soul is trapped in a soul gem on the demilich's skull, visible as a tiny, creature-shaped mote of light. While its soul is trapped, a creature can't be restored to life by any means. A soul that remains in a soul gem for 30 days is destroyed forever. If the demilich is defeated and a soul gem crushed, the creature is restored to life if its body is within 100 miles. A creature that succeeds on a saving throw against this effect is immune to it for 24 hours." }
    - { name: 'A demilich mastermind begins combat with up to four empty soul gems', desc: '' }
reactions:
    reactions: ['The demilich mastermind has the following additional reactions, which it can use only while bloodied:']
    0: { name: 'Reflection Arcane', desc: 'When the demilich succeeds on a saving throw against a spell targeting it, it forces the spell to also target another creature within 30 feet.' }
    1: { name: 'Skull Shock', desc: 'When the demilich takes damage from a melee attack, the attacker takes 42 (12d6) lightning damage.' }
'legendary actions':
    - { name: 'The demilich can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. The demilich regains spent legendary actions at the start of its turn." }
    - { name: 'Cranial Transposition', desc: "The dust surrounding the demilich falls to the ground. The demilich and a nonmagical, unattended skull within 30 teleport, switching places. Until the demilich moves or attacks, it is indistinguishable from a nonmagical skull, and the dust composing the demilich's wraithlike body doesn't reform around it." }
    - { name: 'Dust Storm (Costs 2 Actions)', desc: "The dust of the demilich's body swirls in a 30-foot radius around the demilich. Each creature in the area makes a DC 17 Constitution saving throw. On a failure, the creature takes 21 (6d6) necrotic damage and is blinded until the end of its next turn. The demilich then moves up to its speed." }
    - { name: 'Ringing Laugh (Costs 2 Actions)', desc: 'Each creature within 60 feet that can hear the demilich makes a DC 17 Wisdom saving throw. On a failure, a creature is frightened until the end of its next turn.' }
    - { name: Telekinesis, desc: "The demilich targets a Huge or smaller creature or an object weighing up to 1,000 pounds within 60 feet. If the target is a creature, it must succeed on a DC 17 Strength saving throw. Otherwise, the demilich moves the target up to 30 feet in any direction, including up. If another creature or object stops the target's movement, both take 10 (3d6) bludgeoning damage. At the end of this movement, the target falls if it is still in the air, taking falling damage as normal." }
combat:
    - { name: 'The demilich stays immobile unless intruders take actions that threaten it or its treasure hoard', desc: "It then flies into the air, taking care to stay at least 50 feet above enemies. It uses Devour Soul on each of its turns, targeting its biggest threat. It uses Telekinesis and Ringing Laugh when it's able to do so from a distance. If creatures are within 30 feet of it, it uses Dust Storm and tries to move away. When reduced to 40 hit points or fewer, it uses Cranial Transposition to swap places with a decoy skull (if one is available) to give the impression that it has been defeated. It will not willingly leave its lair." }

---
```statblock
monster: Demilich Mastermind - A5E
```
